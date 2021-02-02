<?php
if(!defined('SAFETORUN')) {
    die('');
}

$config = array(
    "db" => array(
            "dbname" => 'beedesig_ssAerials19',
            "username" => 'beedesig_aerial',
            "password" => '9YbV2VxPDFnqimV',
            "host" => 'localhost:8889'
    ),
    "urls" => array(
        "baseUrl" => "http://localhost:8888/ss_aerials"
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