<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct() {


		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');


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


    //create a new user
	function create_user()
	{
		$this->data['title'] = "Create User";

		// if (!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())
		// {
		// 	redirect('auth', 'refresh');
		// }

		
		$this->form_validation->set_message('required', 'กรุณากรอกข้อมูล');
		$this->form_validation->set_message("valid_email","กรุณากรอก E-mail ที่ถูกต้อง");
      	$this->form_validation->set_message("matches","กรุณา กรอก password ให้ตรงกัน");
      	$this->form_validation->set_message("min_length","กรุณากรอก password อย่างน้อย 8 ตัว");
      	 $this->form_validation->set_message("max_length","กรุณากรอก password ไม่เกิน 20 ตัว");
		//validate form input
		$this->form_validation->set_rules('first_name', $this->lang->line('create_user_validation_fname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('last_name', $this->lang->line('create_user_validation_lname_label'), 'required|xss_clean');
		$this->form_validation->set_rules('email', $this->lang->line('create_user_validation_email_label'), 'required|valid_email');
		$this->form_validation->set_rules('phone', $this->lang->line('create_user_validation_phone_label'), 'required|xss_clean');
		// $this->form_validation->set_rules('company', $this->lang->line('create_user_validation_company_label'), 'required|xss_clean');
		$this->form_validation->set_rules('password', $this->lang->line('create_user_validation_password_label'), 'required|min_length[' . $this->config->item('min_password_length', 'ion_auth') . ']|max_length[' . $this->config->item('max_password_length', 'ion_auth') . ']|matches[password_confirm]');
		$this->form_validation->set_rules('password_confirm', $this->lang->line('create_user_validation_password_confirm_label'), 'required');




		if ($this->form_validation->run() == true)
		{
			$username = strtolower($this->input->post('first_name')) . ' ' . strtolower($this->input->post('last_name'));
			$email    = $this->input->post('email');
			$password = $this->input->post('password');

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name'  => $this->input->post('last_name'),
				// 'company'    => $this->input->post('company'),
				'phone'      => $this->input->post('phone'),
			);

		}
		if ($this->form_validation->run() == true && $this->ion_auth->register($username, $password, $email, $additional_data))
		{
			//check to see if we are creating the user
			//redirect them back to the admin page
			// $this->session->set_flashdata('message', $this->ion_auth->messages());
			$this->session->set_flashdata(array('true_result' => 'การลงทะเบียนเสร็จสิ้น'));
			redirect("auth", 'refresh');
		}
		else
		{
			//display the create user form
			//set the flash data error message if there is one
			$this->data['message'] = (validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata('message')));

			$this->data['first_name'] = array(
				'name'  => 'first_name',
				'id'    => 'first_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('first_name'),
			);
			$this->data['last_name'] = array(
				'name'  => 'last_name',
				'id'    => 'last_name',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('last_name'),
			);
			$this->data['email'] = array(
				'name'  => 'email',
				'id'    => 'email',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('email'),
			);
			$this->data['company'] = array(
				'name'  => 'company',
				'id'    => 'company',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('company'),
			);
			$this->data['phone'] = array(
				'name'  => 'phone',
				'id'    => 'phone',
				'type'  => 'text',
				'value' => $this->form_validation->set_value('phone'),
			);
			$this->data['password'] = array(
				'name'  => 'password',
				'id'    => 'password',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password'),
			);
			$this->data['password_confirm'] = array(
				'name'  => 'password_confirm',
				'id'    => 'password_confirm',
				'type'  => 'password',
				'value' => $this->form_validation->set_value('password_confirm'),
			);


			$this->load->view('templates/header');
			$this->_render_page('register', $this->data);
			$this->load->view('templates/footer');
		
		}
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;



		$view_html = $this->load->view($view, $this->viewdata, $render);

		if (!$render) return $view_html;
	}

}
