<?php
// vim: ft=php

/**********************
 * Connection options *
 **********************/

/*
 * HTTP auth method
 * ================
 *
 * Specify which HTTP authentication method does your server need. Most
 * CalDAV servers support Basic Authentication, but you should check your
 * server documentation.
 *
 * It is recommended to use a fixed value for this. If you don't set it,
 * CalDAV client will have to negotiate with server on each request and
 * perfomance will be worse (mainly when Basic auth is used)
 *
 * Possible values can be found at
 * http://www.php.net/manual/es/function.curl-setopt.php (CURLOPT_HTTPAUTH)
 *
 * Examples:
 *  Automatic guess: $config['caldav_http_auth_method'] = null;
 *  SabreDAV: $config['caldav_http_auth_method'] = CURLAUTH_DIGEST;
 *  DAViCal: $config['caldav_http_auth_method'] = CURLAUTH_BASIC;
 */

$config['caldav_http_auth_method'] = CURLAUTH_BASIC;


/*******************
 * CalDAV URLs     *
 *******************/

/*
 * CalDAV principal URL template
 * =============================
 *
 * %u will be replaced by an username. Please, add trailing slash
 * Some samples:
 * - DAViCal: https://host/caldav.php/%u/
 * - SabreDAV: https://host/calendarserver.php/principals/%u/
 * - Apple Calendar Server: https://host/calendars/users/%u/
 */

$config['caldav_principal_url'] = '{PRINCIPAL_URL}';

/*
 * CalDAV calendars URL template
 * =============================
 *
 * %s will be replaced by the required string depending on the context (user
 * name, username followed by a calendar or resource inside a calendar)
 * Please, add trailing slash
 * Some samples:
 * - DAViCal: https://host/caldav.php/%s/
 * - SabreDAV: https://host/calendarserver.php/calendars/%s/
 * - Apple Calendar Server: https://host/calendars/users/%s/
 */

$config['caldav_calendar_url'] = '{CALENDAR_URL}';

/*
 * Public CalDAV URL for calendars
 * ===============================
 *
 * %s is a placeholder for the rest of the URL (user + calendar).
 * Please, add trailing slash.
 * Will be shown to users only when 'show_public_caldav_url' is enabled
 */
//$config['public_caldav_url'] = 'https://public.server/caldav.php/%s/';
$config['public_caldav_url'] = '';

/*******************
 * Share options   *
 *******************/

/*
 * Allow calendar sharing
 * ======================
 *
 * You can enable or disable calendar sharing. If your CalDAV server does not
 * support WebDAV ACLs disable sharing
 */

$config['enable_calendar_sharing'] = TRUE;

// Default permissions for calendar owner
$config['owner_permissions'] = array('all', 'read', 'unlock', 'read-acl',
		'read-current-user-privilege-set', 'write-acl', 'C:read-free-busy',
		'write', 'write-properties', 'write-content', 'bind', 'unbind');

// Permissions for sharing calendars using the 'read' profile
$config['read_profile_permissions'] = array('C:read-free-busy', 'read');

// Permissions for sharing calendars using the 'read+write' profile
$config['read_write_profile_permissions'] = array('C:read-free-busy',
		'read', 'write');

// Authenticated users default permissions
$config['default_permissions'] = array('C:read-free-busy');

