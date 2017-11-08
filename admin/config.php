<?php
// HTTP
define('HTTP_SERVER', 'http://linux.localdomain.com.br/friedrich-store/admin/');
define('HTTP_CATALOG', 'http://linux.localdomain.com.br/friedrich-store/');

// HTTPS
define('HTTPS_SERVER', 'http://linux.localdomain.com.br/friedrich-store/admin/');
define('HTTPS_CATALOG', 'http://linux.localdomain.com.br/friedrich-store/');

// DIR
define('DIR_APPLICATION', '/var/www/html/friedrich-store/admin/');
define('DIR_SYSTEM', '/var/www/html/friedrich-store/system/');
define('DIR_IMAGE', '/var/www/html/friedrich-store/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_CATALOG', '/var/www/html/friedrich-store/catalog/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'julio');
define('DB_PASSWORD', '100778');
define('DB_DATABASE', 'friedrich_store');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
