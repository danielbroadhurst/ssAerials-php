<?php
$dbhandle = mysqli_connect( $config['db']['host'], $config['db']['username'], $config['db']['password'] ) or die( "Unable to connect to MYSQL" );
$selected = mysqli_select_db( $dbhandle, $config['db']['dbname'] ) or die( http_response_code(404) );