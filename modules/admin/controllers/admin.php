<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		echo "Ini Halaman Admin";
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */