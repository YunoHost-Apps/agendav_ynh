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
        caldav_app="${installed_radicale[0]}"
        caldav_baseurl=/
    else
        ynh_die "Please install Baïkal or Radicale before AgenDAV."
    fi

    echo -e "$caldav_app $caldav_baseurl"
}

# Render conf/settings.php into $install_dir/config/settings.php.
#
# Rediscovers the CalDAV backend and the local timezone, then lets
# ynh_config_add substitute them along with the app settings ($path, $db_*,
# $encryptkey, $session_key, $language) that YunoHost injects into every script.
#
# Declaring these `local` is safe: _ynh_replace_vars resolves placeholders with
# ${!one_var}, and bash's dynamic scoping makes a caller's locals visible to the
# functions it calls.
_ynh_agendav_config_settings() {
    local caldav_info caldav_app caldav_baseurl caldav_domain caldav_path caldav_url timezone

    caldav_info=$(_ynh_agendav_find_caldav_app)
    caldav_app="$(cut -d " " -f 1 <<< "$caldav_info")"
    caldav_baseurl="$(cut -d " " -f 2 <<< "$caldav_info")"

    caldav_domain=$(ynh_app_setting_get --app="$caldav_app" --key=domain)
    caldav_path=$(ynh_app_setting_get --app="$caldav_app" --key=path)
    caldav_url="https://${caldav_domain}${caldav_path%/}"
    caldav_baseurl="${caldav_url}${caldav_baseurl}"

    timezone=$(timedatectl show --value --property=Timezone)

    ynh_config_add --template="../conf/settings.php" \
                   --destination="${install_dir}/config/settings.php"
}

#=================================================
# EXPERIMENTAL HELPERS
#=================================================

#=================================================
# FUTURE OFFICIAL HELPERS
#=================================================
