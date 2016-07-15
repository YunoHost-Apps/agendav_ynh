#
# Common variables
#

# AgenDAV version
VERSION="2.0.0-beta2"

# Source tarball checksum
SOURCE_SHA256="5cbb76c08ef1c669e5735473a963ca62b835fd43955d31cc1b6d8d32672bc54d"

# Source tarball URL
SOURCE_URL="https://github.com/adobo/agendav/releases/download/${VERSION}/agendav-${VERSION}.tar.gz"

# App package root directory should be the parent folder
PKGDIR=$(cd ../; pwd)

# Associative array of languages
declare -A LANGUAGES=(
  [nl]=nl_NL
  [en]=en
  [fr]=fr_FR
  [de]=de_DE
  [it]=it_IT
  [es]=es_ES
)

#
# Common helpers
#

# Source app helpers
source /usr/share/yunohost/helpers

# Download and extract AgenDAV sources to the given directory
# usage: extract_agendav DESTDIR
extract_agendav() {
  local DESTDIR=$1

  # retrieve and extract tarball
  tarball_path="/tmp/agendav.tar.gz"
  rm -f "$tarball_path"
  wget -q -O "$tarball_path" "$SOURCE_URL" \
    || ynh_die "Unable to download AgenDAV archive"
  echo "$SOURCE_SHA256 $tarball_path" | sha256sum -c >/dev/null \
    || ynh_die "Invalid checksum of downloaded archive"
  tar xf "$tarball_path" -C "$DESTDIR" --strip-components 1 \
    || ynh_die "Unable to extract AgenDAV archive"
  rm -rf "$tarball_path"

  # apply patches
  (cd "$DESTDIR" \
   && for p in ${PKGDIR}/patches/*.patch; do patch -p1 < $p; done) \
    || die "Unable to apply patches to AgenDAV"
}
