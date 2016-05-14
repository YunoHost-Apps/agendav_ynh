<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Advanced options which you should not need to modify
require_once('advanced.php');

// Defaults
require_once('defaults.php');

/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| If this is not set then CodeIgniter will guess the protocol, domain and
| path to your installation.
|
*/
$config['base_url']	= 'https://{DOMAIN}{PATH}/';


/*
|--------------------------------------------------------------------------
| Categories of log messages which will get logged
|--------------------------------------------------------------------------
|
| Specify which types of log lines should be written to disk. Possible
| values are:
|
|  * ERROR: error messages, recommended
|  * INFO: informational messages, recommended
|  * AUTHERR: authentication errors
|  * AUTHOK: successful authentications
|  * INTERNALS: AgenDAV internal processing actions, do not use unless you
|               are having problems or you want to debug AgenDAV
|  * DEBUG: CodeIgniter internal debug. Do not enable unless you know what
|           you're doing
*/
$config['show_in_log']= array('ERROR','INFO','AUTHERR', 'AUTHOK'); 

/*
|--------------------------------------------------------------------------
| Error Logging Directory Path
|--------------------------------------------------------------------------
|
| Use a full server path with trailing slash.
|
*/
$config['log_path'] = '{LOGDIR}/';

/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class or the Session class you
| MUST set an encryption key.  See the user guide for info.
|
*/
$config['encryption_key'] = '{ENCRYPTKEY}';


/*
|--------------------------------------------------------------------------
| Cookie Related Variables
|--------------------------------------------------------------------------
|
| 'cookie_prefix' = Set a prefix if you need to avoid collisions
| 'cookie_domain' = Set to .your-domain.com for site-wide cookies
| 'cookie_path'   =  Typically will be a forward slash
| 'cookie_secure' =  Cookies will only be set if a secure HTTPS connection exists.
|
*/
$config['cookie_prefix']	= "{COOKIE_PREFIX}";
$config['cookie_domain']	= "{COOKIE_DOMAIN}";
$config['cookie_path']		= "/";
$config['cookie_secure']	= TRUE;

/*
|--------------------------------------------------------------------------
| Reverse Proxy IPs
|--------------------------------------------------------------------------
|
| If your server is behind a reverse proxy, you must whitelist the proxy IP
| addresses from which CodeIgniter should trust the HTTP_X_FORWARDED_FOR
| header in order to properly identify the visitor's IP address.
| Comma-delimited, e.g. '10.0.1.200,10.0.1.201'
|
*/
$config['proxy_ips'] = '';

/*
|--------------------------------------------------------------------------
| Application title
|--------------------------------------------------------------------------
|
| To be shown in page titles and some other places
|
*/
$config['site_title'] = 'Calendar web access for Yunohost';

/*
|--------------------------------------------------------------------------
| Logo
|--------------------------------------------------------------------------
|
| Filename from public/img
|
*/
$config['logo'] = 'agendav_100transp.png';

/*
|--------------------------------------------------------------------------
| Footer message
|--------------------------------------------------------------------------
|
| Text to be shown in footer
|
*/
$config['footer'] = 'Powered by Yunohost';

/*
|--------------------------------------------------------------------------
| URL to redirect after logging out
|--------------------------------------------------------------------------
|
| Leave empty if you want to redirect to login page
|
*/
$main_domain = exec('cat /etc/yunohost/current_host');
$config['logout_redirect_to'] = 'https://'.$main_domain.'/yunohost/sso/?action=logout';

/*
|--------------------------------------------------------------------------
| Additional static JavaScript files
|--------------------------------------------------------------------------
|
| Files have to be placed inside public/js
|
| Useful for programmatically adding events via Fullcalendar
|
*/
$config['additional_js'] = array();

/*
|--------------------------------------------------------------------------
| Show public CalDAV in calendar edit form
|--------------------------------------------------------------------------
|
| Set this to true if you want to show public CalDAV URLs in calendar edit
| form
|
*/
$config['show_public_caldav_url'] = FALSE;

/*
|--------------------------------------------------------------------------
| Default Language
|--------------------------------------------------------------------------
|
| This determines which language should be used by default. Make sure
| there is an available translation if you intend to use something other
| than en.
|
*/
$config['default_language']	= '{LANG}';

/*
|--------------------------------------------------------------------------
| Default time format
|--------------------------------------------------------------------------
|
| This determines which time format should be used by default. You can choose
| between 12 and 24 hours time format
*/
$config['default_time_format'] = '24';

/*
|--------------------------------------------------------------------------
| Default date format
|--------------------------------------------------------------------------
|
| This determines which date format should be used by default in forms.
| Dates will be formatted anywhere else as stated in format_full_date
| option.
| You can choose any of the following values:
|
| * ymd : YYYY-month-day will be used
| * dmy: day-month-YYYY will be used
| * mdy: month-day-YYYY will be used
*/
$config['default_date_format'] = 'ymd';


/*
|--------------------------------------------------------------------------
| Readable date format (strftime)
|--------------------------------------------------------------------------
|
| This determines which date format should be used by default when showing a
| date. It's not used in forms.
|
| Requires strftime syntax (http://php.net/strftime)
|
| Some examples:
|
|  * %a %e %B %Y : Mon 5 March 2012
|  * %a %e de %B de %Y : Lun 5 de marzo de 2012 (great for es_ES)
*/

$config['format_full_date'] = '%a %e %B %Y';

/*
|--------------------------------------------------------------------------
| Calendar titles and columns date formats
|--------------------------------------------------------------------------
|
| Following options control how the web calendar should format dates on
| titles and columns for each type of view
|
| Requires own Fullcalendar syntax
| (http://arshaw.com/fullcalendar/docs/utilities/formatDate/)
|
*/

$config['format_column_month'] = 'ddd'; 
$config['format_column_week'] = 'ddd d'; 
$config['format_column_day'] = 'ddd d MMMM'; 
$config['format_column_table'] = 'MMM d, yyyy';

$config['format_title_month'] = 'MMMM yyyy';
$config['format_title_week'] = "MMM d[ yyyy]{ '&#8212;'[ MMM] d yyyy}";
$config['format_title_day'] = 'dddd, MMM d yyyy';
$config['format_title_table'] = 'dddd, MMM d yyyy';

/*
|--------------------------------------------------------------------------
| Default first day of week
|--------------------------------------------------------------------------
|
| This determines which day should be first of week.
|
| 0 means Sunday, 1 means Monday and so on
*/

$config['default_first_day'] = 1;

/*
|--------------------------------------------------------------------------
| Default timezone
|--------------------------------------------------------------------------
|
| This determines which timezone should be used by default
|
| Please, use a valid timezone from http://php.net/timezones
*/

$config['default_timezone'] = '{TIMEZONE}';

/*
|--------------------------------------------------------------------------
| Color list
|--------------------------------------------------------------------------
|
| Background colors. Foreground color are calculated by clients
|
*/

$config['calendar_colors'] = array(
		'D4EAEF',
		'3A89C9',
		'107FC9',
		'FAC5C0',
		'FF4E50',
		'BD3737',
		'C9DF8A',
		'77AB59',
		'36802D',
		'F8F087',
		'E6D5C1',
		'3E4147',
);


/* End of file config.php */
/* Location: ./application/config/config.php */
