<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function index() {
		
		if (!$this->ion_auth->logged_in()) {
			$this->load->view('templates/header');
			$this->load->view('news');
			$this->load->view('templates/footer');
		}

		else {
			$this->load->view('templates/header_logged_in');
			$this->load->view('news');
			$this->load->view('templates/footer');
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */