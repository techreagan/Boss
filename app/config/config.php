<?php 
ob_start();
session_start();

// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', '_YOUR_DB_USERNAME_');
define('DB_PASS', '_YOUR_DB_PASSWORD_');
define('DB_NAME', 'YOUR_DBNAME_');

// App Root 
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', '_YOUR_URL_');
// Site Name
define('SITENAME', '_YOUR_SITENAME_');