<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CareerStep extends CI_Controller {

	public function index()
	{
	    $this->load->view('careerstep.php');
	}
}
