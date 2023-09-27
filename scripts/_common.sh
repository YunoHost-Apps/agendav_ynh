#!/bin/bash

#=================================================
# COMMON VARIABLES
#=================================================

#=================================================
# PERSONAL HELPERS
#=================================================

_ynh_agendav_find_caldav_app() {
    mapfile -t all_apps < <(yunohost app list --output-as json --quiet | jq -r ".apps[].id")

    mapfile -t installed_baikal < <(printf -- '%s\n' "${all_apps[@]}" | grep baikal)
    mapfile -t installed_radicale < <(printf -- '%s\n' "${all_apps[@]}" | grep radicale)

    if (( "${#installed_baikal[@]}" > 0 )); then
        caldav_app="${installed_baikal[0]}"
        caldav_baseurl="/cal.php/"
    elif (( "${#installed_radicale[@]}" > 0 )); then
        caldav_app="${installed_baikal[0]}"
        caldav_baseurl=/
    else
        ynh_die --message="Please install Baïkal or Radicale before AgenDAV."
    fi

    echo -e "$caldav_app $caldav_baseurl"
}

#=================================================
# EXPERIMENTAL HELPERS
#=================================================

#=================================================
# FUTURE OFFICIAL HELPERS
#=================================================
