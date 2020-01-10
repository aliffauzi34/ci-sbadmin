<?php
defined('BASEPATH') OR exit('No script direct allowed');
/**
 * 
 */
class Register extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('register.php');
	}
}
?>