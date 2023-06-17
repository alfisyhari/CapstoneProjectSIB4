<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Login extends CI_Controller {

        public function __construct() {
            parent::__construct();
            if ($this->session->userdata('log_status')) {
                redirect('App');
            }  
        }
        public function index()
        {
            $this->load->view('apps/login');   
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        public function process_login()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Sanitize user input
                $username = htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8');
                $password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');
                
                $username = $this->test_input($username);
                $password =  $this->test_input($password);
                $result = $this->M_login->login_validation($username,$password);
                if ($result) {
                $newdata   = array(
                    'id'        => $result['id'],
                    'name'      => $result['name'],
                    'username'      => $result['username'],
                    'role' => $result['role'],
                    'phone' => $result['phone'],
                    'gender' => $result['gender'],
                    'log_status'=> true
                );
                $this->session->set_userdata($newdata);
                    redirect('App');
                }
                else{
                    $this->session->set_flashdata('alert', '
                        <div class="alert alert-danger" role="alert">
                        Email atau password salah!
                        </div>
                        ');
                    redirect('Login');
                }
            }

            }
    }
