<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Save extends CI_Controller {

	
	public function index()
	{
		//echo "holie";
		$email= $this->input->post("email");
		echo "Holi ".$email;

		 redirect("welcome");
	}
}
