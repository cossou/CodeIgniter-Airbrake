<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class MY_Exceptions extends CI_Exceptions {
		
	 function __construct()
     {
         parent::__construct();
     }	
	 
	// --------------------------------------------------------------------

	/**
	 * Exception Logger
	 *
	 * This function logs PHP generated error messages
	 *
	 * @access	private
	 * @param	string	the error severity
	 * @param	string	the error string
	 * @param	string	the error filepath
	 * @param	string	the error line number
	 * @return	string
	 */
	function log_exception($severity, $message, $filepath, $line)
	{
		$this->CI = &get_instance(); 	
		$severity = ( ! isset($this->levels[$severity])) ? $severity : $this->levels[$severity];

		log_message('error', 'Severity: '.$severity.'  --> '.$message. ' '.$filepath.' '.$line, TRUE);
		
		$this->CI->load->library('AirbrakeCI');
		$this->CI->airbrakeci->notifyOnError('Severity: '.$severity.'  --> '.$message. ' '.$filepath.' '.$line);
	}
	 
	 
}

// END MY_Exceptions Class

/* End of file MY_Exceptions.php */
/* Location: ./application/core/MY_Exceptions.php */ 	