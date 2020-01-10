<?php
defined('BASEPATH') OR exit('No script direct access allowed');
/**
 * 
 */
class Forgot extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('forgot.php');
	}
}
?>