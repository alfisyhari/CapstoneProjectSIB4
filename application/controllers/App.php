<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class App extends CI_Controller {

        public function __construct() {
            parent::__construct();
            if (!$this->session->userdata('log_status')) {
                redirect('Login');
            }  
            
        }
        public function index()
        {
            $this->load->view('apps/dashboard');   
        }
        public function news()
        {
            $this->load->view('apps/news');   
        }
        public function weather()
        {
            $this->load->view('apps/weather');   
        }
        public function profile()
        {
            $this->load->view('apps/profile');   
        }
        public function userManagement()
        {
            if ($this->session->userdata('role') != "ADMIN") {
                redirect('app');
            }  
            $data['dataUser'] = $this->M_table->dataTableNotWhere('users', 'id', $this->session->userdata('id'));
            $this->load->view('apps/userManagement',$data);   
        }
        public function update($id)
        {
            
            if ($this->session->userdata('role') != "ADMIN") {
                redirect('app');
            }  
            // Periksa apakah ada data yang dikirimkan melalui form
            if ($this->input->post()) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'gender' => $this->input->post('gender'),
                    'phone' => $this->input->post('phone')
                );

                // Panggil model untuk melakukan update
                $this->M_table->updateTable('users', $data, array('id' => $id));

                // Redirect ke halaman user management setelah update berhasil
                redirect('app/userManagement');
            } else {
                redirect('index.php/app/userManagement');
            }
        }

        public function delete($id)
        {
            if ($this->session->userdata('role') != "ADMIN") {
                redirect('app');
            }  
            // Panggil model untuk melakukan delete
            $this->M_table->deleteTable('users', $id);

            // Redirect ke halaman user management setelah delete berhasil
            redirect('app/userManagement');
        }
        public function addUser()
        {
            if ($this->session->userdata('role') != "ADMIN") {
                redirect('app');
            }  
            // Periksa apakah ada data yang dikirimkan melalui form
            if ($this->input->post()) {
                $data = array(
                    'name' => $this->input->post('name'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'gender' => $this->input->post('gender'),
                    'role' => $this->input->post('role'),
                    'phone' => $this->input->post('phone')
                );

                // Panggil model untuk menyimpan data baru
                $this->M_table->createTable('users', $data);

                // Redirect ke halaman user management setelah insert berhasil
                redirect('app/userManagement');
            } else {
                // Tampilkan halaman tambah user
                $this->load->view('apps/addUser');
            }
        }

    }
