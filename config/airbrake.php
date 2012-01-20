<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
| ------------------------------------------------------------------- 
| AIRBRAKE CONFING 
| ------------------------------------------------------------------- 
| Configuration of Airbrake. 
| */  
 
/*
 * timeout - Defaults to 2, this is how long the service will wait before giving up. This should be set to a sane limit, so as to avoid excessive page times in the event of a failure.
 * environmentName - Defaults to 'production'. This can be changed to match the environment that you are working, which will help prevent messy logs, filled with non-production problems.
 * serverData - This defaults to the $_SERVER array, but can be overridden with any array of data.
 * getData - Defaults to the $_GET array
 * postData - Defaults to the $_POST array
 * sessionData - Defaults to the $_SESSION array
 * component - This is the name of the component or controller that is running.
 * action - The name of the action that was called.
 * projectRoot - Defaults to the Document Root. May need to change based on the context of your application.
 * url - The main URL that was requested.
 * hostname - The hostname that was requested.
 * queue - Optional - the name of the Resque queue to use.
 * 
*/ 

$config['airbrake_api_key'] = 'your api key';
$config['airbrake_options'] = array('environmentName' => ENVIRONMENT);

/* End of file airbrake.php */
/* Location: ./application/config/airbrake.php */