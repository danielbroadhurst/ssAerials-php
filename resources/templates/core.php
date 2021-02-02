<?php
if(!defined('SAFETORUN')) {
    die('');
}
$mytable = "SSAerialReviews";
$myTitle = 'Home Page';
require "dbconnect.php";
$mycss = "css/styles.css";
$myJS = "js/scripts.js";
// HMTL Begins Here
require "header.php";
require "formdata.php";
require "savedata.php";
require "display-reviews.php";
// Body
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>