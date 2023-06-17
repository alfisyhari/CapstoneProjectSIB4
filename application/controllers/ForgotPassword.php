<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('log_status')) {
            redirect('App');
        }  
    }

    public function index()
    {
        $this->load->view('apps/forgot');   
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function updatePw()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $result = $this->M_login->checkUsername($username);
        if ($result) {
            $data['password'] = $password;
            $this->M_table->updateTable('users', $data, array('username' => $username));
            redirect('Login');
        }
        else{
            readirect('ForgotPassword');
        }
    }
}
