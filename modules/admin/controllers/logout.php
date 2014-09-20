<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends MX_Controller {

	public function index()
	{
		$this->ion_auth->logout();
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */