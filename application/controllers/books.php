<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

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
		$this->load->model('books_model');
	}

	public function index() {
		
		if (!$this->ion_auth->logged_in()) {
			$this->load->view('templates/header');
		}
		
		else {
			$this->load->view('templates/header_logged_in');
			
		}

		// $data['books'] = $this->db_query->get_books_db();
		// $test['new'] = $this->books_model->get_books_type(1);
		// $data['recommended'] = $this->books_model->get_books_type(2);
		// $data['normal'] = $this->books_model->get_books_type(3);

		$data = array(
			'books' => $this->db_query->get_books_db(),
			'new' => $this->books_model->get_books_type(1),
			'recommended' => $this->books_model->get_books_type(2),
			'normal' => $this->books_model->get_books_type(3)
			);

		$this->load->view('books', $data);
		$this->load->view('templates/footer');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */