<?php
class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');

    }

    public function register()
    {
        // Form Validation
        $this->form_validation->set_rules('login','Login', 'required|min_length[4]|max_length[35]|is_unique[users.login]');
        $this->form_validation->set_rules('email', 'Email','required|valid_email' );
        $this->form_validation->set_rules('password','Password','required|min_length[4]|max_length[35]');
        $this->form_validation->set_rules('confirm_password','Confirm_password','required|matches[password]');
        $this->form_validation->set_rules('firstname', 'First Name', 'required|min_length[2]|max_length[35]');
        $this->form_validation->set_rules('lastname', 'Last Name', 'required|min_length[2]|max_length[35]');

        if ($this->form_validation->run()){
            $this->user_model->add_user();

            $this->session->set_flashdata('registered', 'You are now registered. Please Login');
            redirect('home');

        } else {

            $this->load->view('login/inc/header_view');
            $this->load->view('login/login_view');
            $this->load->view('login/inc/footer_view');
        }
    }

}