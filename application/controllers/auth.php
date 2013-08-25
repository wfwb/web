<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index() {
		redirect('/');
	}

	public function login() {

        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true)
        {
            //check to see if the user is logging in
            //check for "remember me"
            $remember = (bool) $this->input->post('remember');

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember))
            {
                //if the login is successful
                //redirect them back to the home page
                $this->session->set_flashdata('message', $this->ion_auth->messages());
                redirect('/', 'refresh');
            }
            else
            {
                //if the login was un-successful
                //redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('auth/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        }
        else
        {
            //the user is not logging in so display the login page
            //set the flash data error message if there is one
            // $this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');

            // $this->data['identity'] = array('name' => 'identity',
            //     'id' => 'identity',
            //     'type' => 'text',
            //     'value' => $this->form_validation->set_value('identity'),
            // );
            // $this->data['password'] = array('name' => 'password',
            //     'id' => 'password',
            //     'type' => 'password',
            // );

            // $this->_render_page('auth/login', $this->data);
            redirect('/', 'refresh');
        }
    }

    public function admin_login() {

        $this->form_validation->set_rules('identity', 'Identity', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == true) {

            if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'))) {
                //if the login is successful
                //redirect them back to the home page
                if ($this->ion_auth->is_admin()) {
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    redirect('admin_home_page', 'refresh');
                }
                else {
                    $this->ion_auth->logout();
                    $this->session->set_flashdata('message', $this->ion_auth->messages());
                    redirect('admin', 'refresh');
                }
            }
            else {
                //if the login was un-successful
                //redirect them back to the login page
                $this->session->set_flashdata('message', $this->ion_auth->errors());
                redirect('admin', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
            }
        }
        else {
            redirect('admin', 'refresh');
        }

    }

	public function logout() {

		$this->ion_auth->logout();
        $this->session->set_flashdata('message', $this->ion_auth->messages());
		redirect('/', 'refresh');

	}

    public function admin_logout() {
        $this->ion_auth->logout();
        $this->session->set_flashdata('message', $this->ion_auth->messages());
        redirect('admin', 'refresh');
    }

}
