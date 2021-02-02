<?php
if(!defined('SAFETORUN')) {
   die(''); 
}

if (!empty($_POST))
{
    foreach ($_POST as $key => $value)
    {
		if ( is_array( $value )){ //multiple checkboxes are sent as an array
			foreach ($value as $cbkey => $cbvalue) //extract checkbox values
			{
				$webdata[$key.$cbkey] = $cbvalue; //create a separate key for each checkbox item to store in our own array
			}
		} else{
        $webdata[$key] = $value;
		}
    }
}
?>
