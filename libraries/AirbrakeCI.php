<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package		AirbrakeCI
 * @author		Hélder Duarte <cossou@gmail.com>
 * @copyright	(c) 2012 Hélder Duarte
 * @license		http://www.opensource.org/licenses/mit-license.php
 *
 */

class AirbrakeCI 
{

	private $client;

	function __construct()
	{
	    require_once APPPATH.'third_party/Airbrake/Client.php';
	    require_once APPPATH.'third_party/Airbrake/Configuration.php';
		
		$CI =& get_instance();
		$CI->load->config('airbrake');	
		$config = new Airbrake\Configuration($CI->config->item('airbrake_api_key'), $CI->config->item('airbrake_options'));
		$this->client = new Airbrake\Client($config);
	}
	
	public function notify($notice)
	{
		return $this->client->notify($notice);
	}
	
	public function notifyOnError($error)
	{
		return $this->client->notifyOnError($error);
	}
	
	public function notifyOnException($exception)
	{
		return $this->client->notifyOnException($exception);
	}
}

?>