<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	CONTROLLER UNTUK MODULES YG MEMBUTUHKAN LOGIN
*/

class MY_Controller extends MX_Controller {

	public function __construct()
	{
		parent::__construct();

		$no_redirect = array('admin/login');
		if ($this->ion_auth->logged_in() == FALSE && !in_array(uri_string(), $no_redirect)) {
			redirect('admin/login');
		}

		$this->load->library('zf_cache', array('lifetime' => 900));
        $this->zf_cache = $this->zf_cache->get_instance();
        
        $this->output->enable_profiler(ENVIRONMENT == 'development');

	}
}

