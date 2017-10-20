#!/bin/bash
#
# Common variables
#

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

agendav_app_check_installation() {
	echo $(yunohost app list --installed -f "$1" | grep "id:")
}
