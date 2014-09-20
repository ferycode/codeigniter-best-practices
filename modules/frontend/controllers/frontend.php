<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends MX_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->form_validation->CI =& $this;
        $this->output->enable_profiler(ENVIRONMENT == "development");
    }

	public function index()
	{
		$data['keywords'] = "fery code, fery dedi supardi, portofolio, desain web, developer web, bootstrap, javascript, copdeigniter, php";
		$data['description'] = "Welcome to Fery Code. Fery Dedi Supardi's portofolio website. Web Design and Development are My Passion.";
		
		//nice to be able to set title right in the controller in one shot. 
		//Before using template, I had to keep passing the title value here and 
		//there till it reached the header where finally it could get echoed.
		//$this->template->title("Fery Code | Fery Dedi Supardi's Portofolio Website");

		//'default_theme' is a folder name.
		//$this->template->set_theme('onepage');

		//This layout file can use $template['variables'] to put your contents
		//$this->template->set_layout('layout');

		//setting partials view. see the image above for header.php and footer.php locations.
		//these will be available in layout file as $template['partials']['header'] and 
		//$template['partials']['footer']
		//$this->template->set_partial('header','header',$data);
		//$this->template->set_partial('footer','footer');

		//the main content view that contains about page's content. 
		//this will be available in layout file as $template['body']
		//$this->template->build('home', $data);

		// $user = $this->ion_auth->user()->row();
		// dump_exit($user);

		$this->benchmark->mark('template_start');
		$this->template->title("Fery Code | Fery Dedi Supardi's Portofolio Website")
                       ->set_theme('freelancer')
                       ->set_layout('layout')
                       ->enable_parser(FALSE)
                       ->set_partial('header','header',$data)
                       ->set_partial('footer','footer')
                       ->build('home', $data);
        $this->benchmark->mark('template_end');
	}

	public function coba()
	{
		echo "Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.";
	}

}

/* End of file frontend.php */
/* Location: ./application/controllers/frontend.php */