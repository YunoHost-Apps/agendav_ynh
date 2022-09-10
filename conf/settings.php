<?php
/**
 * Site configuration
 *
 * IMPORTANT: These are YunoHost defaults. Do not change this file, apply your
 * changes to local.php.
 */

// Site title
$app['site.title'] = 'YunoHost Calendar';

// Site logo (should be placed in public/img). Optional
$app['site.logo'] = 'agendav_100transp.png';

// Site footer. Optional
$app['site.footer'] = 'AgenDAV ' . \AgenDAV\Version::V;

// Trusted proxy ips
$app['proxies'] = [];

// Database settings
$app['db.options'] = [
        'dbname' => '__DB_NAME__',
        'user' => '__DB_USER__',
        'password' => '__DB_PWD__',
        'host' => 'localhost',
        'driver' => 'pdo_mysql'
];

// CSRF secret
$app['csrf.secret'] = '__ENCRYPTKEY__';

// Log path
$app['log.path'] = '/var/log/__APP__/';

// Base URL
$app['caldav.baseurl'] = '__CALDAV_BASEURL__';

// Authentication method required by CalDAV server (basic or digest)
$app['caldav.authmethod'] = 'basic';

// Do not verify SSL certificate, it is self signed
$app['caldav.certificate.verify'] = false;

// Whether to show public CalDAV urls
$app['caldav.publicurls'] = true;

// Whether to show public CalDAV urls
$app['caldav.baseurl.public'] = 'https://__CALDAV_DOMAIN__';

// Email attribute name
$app['principal.email.attribute'] = '{DAV:}email';

// Calendar sharing
$app['calendar.sharing'] = false;

// Calendar sharing permissions. In case of doubt, do not modify them
// These defaults are only useful for DAViCal (http://wiki.davical.org/index.php/Permissions)
$app['calendar.sharing.permissions'] = [
    'owner' => ['{DAV:}all'],
    'read-only' => ['{DAV:}read', '{urn:ietf:params:xml:ns:caldav}read-free-busy'],
    'read-write' => ['{DAV:}read', '{DAV:}write', '{urn:ietf:params:xml:ns:caldav}read-free-busy'],
    'default' => ['{urn:ietf:params:xml:ns:caldav}read-free-busy']
];

// Default timezone
$app['defaults.timezone'] = '__TIMEZONE__';

// Default language
$app['defaults.language'] = '__LANGUAGE__';

// Default time format. Options: '12' / '24'
$app['defaults.time_format'] = '24';

/*
 * Default date format. Options:
 *
 * - ymd: YYYY-mm-dd
 * - dmy: dd-mm-YYYY
 * - mdy: mm-dd-YYYY
 */
$app['defaults.date_format'] = 'ymd';

// Default first day of week. Options: 0 (Sunday), 1 (Monday)
$app['defaults.weekstart'] = 0;

// Logout redirection. Optional
$main_domain = exec('cat /etc/yunohost/current_host');
$app['logout.redirection'] = 'https://' . $main_domain . '/yunohost/sso/?action=logout';

// Calendar colors
$app['calendar.colors'] = [
    '03A9F4', // Light blue
    '3F51B5', // Indigo
    'F44336', // Red
    'E91E63', // Pink
    '9C27B0', // Purple
    '673AB7', // Deep purple

    'B3E5FC', // Pale light blue
    'C5CAE9', // Pale Indigo
    'FFCDD2', // Pale red
    'F8BBD0', // Pale pink
    'E1BEE7', // Pale purple
    'D1C4E9', // Pale deep purple

    '4CAF50', // Green
    'FFC107', // Yellow
    'CDDC39', // Lime
    'FF9800', // Orange
    '795548', // Brown
    '9E9E9E', // Gray

    'C8E6C9', // Pale green
    'FFF9C4', // Pale yellow
    'F0F4C3', // Pale lime
    'FFE0B2', // Pale orange
    'D7CCC8', // Pale brown
    'F5F5F5', // Pale gray
];

/**
 * Local configuration
 */

$local_config = __DIR__ . '/local.php';
if (file_exists($local_config)) {
  require $local_config;
}
