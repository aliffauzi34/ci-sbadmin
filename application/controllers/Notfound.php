<?php
defined('BASEPATH') OR exit('No script direct allowed');
/**
 * 
 */
class Notfound extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('404.php');
	}
}
?>