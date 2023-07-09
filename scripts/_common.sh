#!/bin/bash

#=================================================
# COMMON VARIABLES
#=================================================

YNH_PHP_VERSION="8.1"

php_dependencies="php$YNH_PHP_VERSION-ctype php$YNH_PHP_VERSION-curl php$YNH_PHP_VERSION-mbstring php$YNH_PHP_VERSION-mcrypt php$YNH_PHP_VERSION-tokenizer php$YNH_PHP_VERSION-xml php$YNH_PHP_VERSION-xmlreader php$YNH_PHP_VERSION-xmlwriter php$YNH_PHP_VERSION-mysql"

# dependencies used by the app (must be on a single line)
pkg_dependencies="$php_dependencies mariadb-server"

#=================================================
# PERSONAL HELPERS
#=================================================

#=================================================
# EXPERIMENTAL HELPERS
#=================================================

#=================================================
# FUTURE OFFICIAL HELPERS
#=================================================
