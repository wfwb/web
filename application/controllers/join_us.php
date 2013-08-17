<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Join_Us extends CI_Controller {

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

	public function __construct()
	{
		parent::__construct();
		$this->load->model('db_query');
	}

	public function index() {
		
		if (!$this->ion_auth->logged_in()) {
			$this->load->view('templates/header');
		}
		
		else {
			$this->load->view('templates/header_logged_in');
		}

		$data['join_us'] = $this->db_query->get_join_us_db();

		$this->load->view('join_us', $data);
		$this->load->view('templates/footer');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */