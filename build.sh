#!/usr/bin/env bash
#
# Build an installable Osmium zip.
#
# WordPress expects the archive to hold one folder named after the theme slug,
# with style.css directly inside it. This repository keeps the theme in theme/
# so the planning notes at the root can never ship, so the build renames the
# folder on the way into the archive.
#
# Usage: ./build.sh

set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
SLUG="osmium"
SRC="$ROOT/theme"
OUT="$ROOT/build"

VERSION="$(sed -n 's/^ *Version: *//p' "$SRC/style.css" | head -1 | tr -d '[:space:]')"
if [ -z "$VERSION" ]; then
	echo "Could not read Version from theme/style.css" >&2
	exit 1
fi

ZIP="$OUT/${SLUG}-${VERSION}.zip"

rm -rf "$OUT"
mkdir -p "$OUT/$SLUG"

# Copy the theme, resolving the bundled font symlinks if any ever appear.
rsync -a --copy-links \
	--exclude '.DS_Store' \
	--exclude '.git*' \
	--exclude 'node_modules' \
	--exclude '*.map' \
	"$SRC"/ "$OUT/$SLUG"/

( cd "$OUT" && zip -qr "$(basename "$ZIP")" "$SLUG" )
rm -rf "${OUT:?}/${SLUG:?}"

echo "Built $ZIP"
echo "  version: $VERSION"
echo "  size:    $(du -h "$ZIP" | cut -f1)"
echo "  files:   $(unzip -l "$ZIP" | tail -1 | awk '{print $2}')"

# The archive must contain exactly one top-level folder, named for the slug.
# unzip -Z1 lists bare paths, which is far less fragile than parsing a table.
TOP="$(unzip -Z1 "$ZIP" | cut -d/ -f1 | sort -u)"
if [ "$TOP" != "$SLUG" ]; then
	echo "Archive root is '$TOP', expected exactly '$SLUG'" >&2
	exit 1
fi
for required in style.css theme.json readme.txt screenshot.png templates/index.html; do
	if ! unzip -Z1 "$ZIP" | grep -qx "$SLUG/$required"; then
		echo "Archive is missing $SLUG/$required" >&2
		exit 1
	fi
done
echo "  layout:  ok, one root folder with every required file"
