<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	public function index()
	{
		echo "Halaman Login";
	}

	public function action_login()
	{
		$this->ion_auth->login('admin@admin.com','password');
	}

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */