<?php
/**
 * AgenDAV site configuration for YunoHost.
 *
 * Since AgenDAV 3.0.0 the configuration is a chain of PHP-DI definition files:
 * config/default.settings.php (defaults) -> this file (overrides) ->
 * config/prod.php. This file must return an array of overrides.
 *
 * Managed by YunoHost (ynh_config_add) — do not edit by hand.
 */

return [
    // Site title
    'site.title' => 'YunoHost Calendar',

    // Base path: AgenDAV is served under this subdirectory by YunoHost ('/' = root).
    'app.base_path' => '__PATH__',

    // Database settings
    'db.options' => [
        'dbname' => '__DB_NAME__',
        'user' => '__DB_USER__',
        'password' => '__DB_PWD__',
        'host' => 'localhost',
        'driver' => 'pdo_mysql',
    ],

    // CSRF secret (required)
    'csrf.secret' => '__ENCRYPTKEY__',

    // Encrypts CalDAV credentials stored in the session. Set explicitly because the
    // var/session.key fallback resolves to dirname(log.path)=/var/log, which is not
    // writable by the app user. Must be 64 hex chars (32 bytes).
    'session.encryption.key' => '__SESSION_KEY__',

    // Log path
    'log.path' => '/var/log/__APP__/',
    'log.level' => 'INFO',

    // CalDAV server
    'caldav.baseurl' => '__CALDAV_BASEURL__',
    'caldav.baseurl.public' => 'https://__CALDAV_DOMAIN__',
    'caldav.publicurls' => true,
    'caldav.authmethod' => 'basic',
    'caldav.certificate.verify' => false,

    // Defaults
    'defaults.timezone' => '__TIMEZONE__',
    'defaults.language' => '__LANGUAGE__',

    // Log out through the YunoHost SSO
    'logout.redirection' => 'https://'
        . trim((string) @file_get_contents('/etc/yunohost/current_host'))
        . '/yunohost/sso/?action=logout',

    // Authenticate transparently from the SSO via HTTP Basic
    // (PHP_AUTH_USER / PHP_AUTH_PW), in addition to the login form.
    'auth.methods' => [\AgenDAV\Authentication\HttpBasic::class],
];
