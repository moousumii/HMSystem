<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		if(!$this->session->userdata('admin_id'))
		return redirect('login');
		
		
	}

}
