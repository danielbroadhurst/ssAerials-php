<?php
if(!defined('SAFETORUN')) {
    die('');
}

$config = array(
    "db" => array(
            "dbname" => 'danie513_ssAerials19',
            "username" => 'danie513_dbAdmin',
            "password" => 'WWQx8x^0r^!s',
            "host" => 'localhost'
    ),
    "urls" => array(
        "baseUrl" => "https://ssaerials.co.uk/"
    )
);
 
/*
    Templates folder
*/
     
defined("TEMPLATES_PATH")
    or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

defined("BASE_URL")
    or define("BASE_URL", $config['urls']['baseUrl'] . '/');
 
/*
    Error reporting.
*/
error_reporting(E_ALL);
@ini_set('display_errors', 1);