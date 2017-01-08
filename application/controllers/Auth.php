<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function login()
    {
        session_destroy();
        session_start();
        $_POST = $_GET;
        $this->form_validation->set_rules('username', 'Kullanıcı Adı', 'required');
        $this->form_validation->set_rules('password', 'Şifre', 'required');
        echo $this->form_validation->set_value('username');

        // $data = array("username" => $_GET['username'], "password" => $_GET['password']);
        // $_GET['username'] = $data['username'];
        // $_GET['password'] = $data['password'];
        // $data = $_GET;
        // $data['username'] = array(
        //     'name' => 'username',
        //     'id' => 'username',
        //     'type' => 'text',
        //     'value' => $this->form_validation->set_value('username')
        // );
        // $data['password'] = array(
        //     'name' => 'password',
        //     'id' => 'password',
        //     'type' => 'password'
        // );

        // if ($this->form_validation->run() != true)
        if (!($this->input->post("username")) OR !($this->input->post("password")))
        {
            // echo "girdi";
            // $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $data['message'] = "Kullanıcı adı ya da şifre boş bırakılamaz!";
            $this->load->view('auth/login',$data);
        }
        else
        {
            if ($this->authentication->login($this->input->post('username'), $this->input->post('password')))
            {
                redirect('/');
            }
            else
            {
                $this->session->set_flashdata('message', $this->authentication->errors());
                redirect('auth/login');
            }
            $this->load->view('auth/login', $data);
        }
    }

    public function logout()
    {
        $this->authentication->logout();
        redirect('/');
    }
}
