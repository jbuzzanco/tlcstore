<?php
// HTTP
define('HTTP_SERVER', 'http://triumphantlifechurch.com/store/');

// HTTPS
define('HTTPS_SERVER', 'http://triumphantlifechurch.com/store/');

define('DIR_APPLICATION', '/home/triumphantlife/public_html/store/catalog/');
define('DIR_SYSTEM', '/home/triumphantlife/public_html/store/system/');
define('DIR_IMAGE', '/home/triumphantlife/public_html/store/image/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_SYSTEM . 'storage/cache/');
define('DIR_DOWNLOAD', DIR_SYSTEM . 'storage/download/');
define('DIR_LOGS', DIR_SYSTEM . 'storage/logs/');
define('DIR_MODIFICATION', DIR_SYSTEM . 'storage/modification/');
define('DIR_UPLOAD', DIR_SYSTEM . 'storage/upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'triumphantlife');
define('DB_PASSWORD', '5651Triumphant!');
define('DB_DATABASE', 'triumphantlife');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');
