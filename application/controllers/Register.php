<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('log_status')) {
            redirect('App');
        }  
    }

    public function index()
    {
        $this->load->view('apps/register');   
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function addUser()
    {
        // Menangkap data yang dikirim melalui form
        $name = $this->input->post('name');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $gender = $this->input->post('gender');
        $phone = $this->input->post('phone');
        
        $result = $this->M_login->login_validation($username,$password);
        if ($result) {
            return redirect('Register');
        }

        // Lakukan validasi atau pemrosesan data sesuai kebutuhan Anda

        // Contoh: Menyimpan data ke database
        $data = array(
            'name' => $name,
            'username' => $username,
            'password' => $password,
            'gender' => $gender,
            'phone' => $phone,
            'role' => "USER"
        );
        
        $this->M_table->createTable('users', $data);
        redirect('Login');
    }
}
