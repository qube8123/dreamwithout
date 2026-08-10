<?php
# Database Configuration
define( 'DB_NAME', 'wp_dreamwithout' );
define( 'DB_USER', 'dreamwithout' );
define( 'DB_PASSWORD', 'ILjzLmjy7XGXm-FGk9fb' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         ',)q?5:wyK>oA(h3Bx^Y&F],#i71:kD?bAC|eA*_G;VceAsr[a#k9Pi:JZ:GVKyH*');
define('SECURE_AUTH_KEY',  'e/`mkHS:c-ppHq3A0QO;aK +4T,W#b]AojzJ!/&G@*9dj;[F9{Tz8YBmf|#@:{p9');
define('LOGGED_IN_KEY',    'dnHs!M  1/ O,M*|:imM=GF!p.,t3|~X3!u|<>O(:&%,vW!PC)Kv0bh8k}-5@Xqy');
define('NONCE_KEY',        'q*L@9yR4x<x|}R`# dC|@]8orF|inEG[45`h4&3d&)1:QMq).td)NrHqYDD=Z1c1');
define('AUTH_SALT',        '$a=fSiAv,}c9-oDSE:W/2nj&xq `AudK+/QyVZ0C7z8~f)L>79Q+|hiy6gP|&m?=');
define('SECURE_AUTH_SALT', 'gTG)q3`:VXnI?]CfEeilmEl:d}kY-u.h&B521Dw:`^FG ML%D4|y%hI-~V#k4)#_');
define('LOGGED_IN_SALT',   'FvJaU_&={6Sw!yU[R%oR-sVtR|Z]9.&v-(y<x+cd,X{cv-qmW:ON@#1%!6|v|4SV');
define('NONCE_SALT',       'N4<jJ  :T{@f;C;yQVn$X3vGD$4w7!r!*+KfsM|(!H9kSiFv#^KkOLGLbg!_pPhy');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'dreamwithout' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

umask(0002);

define( 'WPE_APIKEY', '074536b3e12996b05b9ba5ff45e2ea4ea192b341' );

define( 'WPE_CLUSTER_ID', '401251' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', true );

define( 'FORCE_SSL_LOGIN', true );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'dreamwithout.wpengine.com', 1 => 'dreamwithoutlimitsplanner.com', 2 => 'www.dreamwithoutlimitsplanner.com', 3 => 'dreamwithout.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => '127.0.0.1', );

$wpe_special_ips=array ( 0 => '104.155.167.187', 1 => 'pod-401251-utility.pod-401251.svc.cluster.local', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( );

define( 'WPE_SFTP_ENDPOINT', '34.44.227.159' );

/*MEMCACHED_ENV_START*/ if (isset($_ENV['WPE_CACHE_HOST'])) $memcached_servers=array ( 'default' =>  array ( 0 => $_ENV['WPE_CACHE_HOST'], ), ); /*MEMCACHED_ENV_END*/
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
