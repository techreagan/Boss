# BOSS

Boss Mini PHP framework created by [Tech Reagan](https://github.com/techreagan) 

### Disclaimer

This project is still in alpha version,
If you are interested in helping out with solving bugs and developing new features you are welcome to do so.

## Getting Started

Copy the project in your development folder. 
Follow the instructions to complete the installation.

### Installation

* Apache Server
* PHP 5.6+
* Mysql Database


Install [XAMPP](https://www.apachefriends.org/it/index.html) for an easy quickstart for windows

Install [MAMPP](https://www.mamp.info/en/downloads/) for an easy quickstart for mac 

Or use whatever suit you.


### Configuration File

Modify the app/config/config.php file according to your needs.

``` PHP
//Database Configuration
define('DB_HOST', '_YOUR_HOST');
define('DB_USER', '_YOUR_DATABSE_USERNAME');
define('DB_PASS', '_YOUR_DATABASE_PASSWORD');
define('DB_NAME', '_YOUR DATABASE_NAME');
// App Root 
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', '_YOUR_URL_');
// Site Name
define('SITENAME', '_YOUR_SITENAME_');
```


### Htaccess file

Modify the .htaccess file inside the public folder to match the name of your installation folder, Modify only the RewriteBase.

```
<IfModule mod_rewrite.c>
  Options -Multiviews
  RewriteEngine On 
  RewriteBase /boss/public 
  RewriteCond %{REQUEST_FILENAME} !-d 
  RewriteCond %{REQUEST_FILENAME} !-f 
  RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
```

## Documentation
More documentation coming soon..

## Built With

* PHP
* Mysql

## License

This project is licensed under the MIT License

