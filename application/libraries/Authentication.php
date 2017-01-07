<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Authentication
{
    protected $CI;
    private $errors = array();

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->load->model('Auth_Model');
    }

    public function login($username, $password)
    {
        $password = md5($password);
        $result = $this->CI->Auth_Model->login($username, $password);
        if ($result != null && is_array($result))
        {
          $this->CI->session->set_userdata($result);
          return true;
        }
        else
        {
            $this->errors[] = "User name / password is invalid.";
            return false;
        }
    }

    public function logout()
    {
        $this->CI->session->unset_userdata('username');
        $this->CI->session->sess_destroy();
        return TRUE;
    }

    public function user($username = NULL)
    {
        //if no id was passed use the current users id
        $username || $username = $this->CI->session->userdata('username');
        $user = $this->CI->Auth_Model->user($username);
        return (object)$user;
    }

    public function logged_in()
    {
        // echo $this->CI->session->userdata('username');
        // return true;
        return (bool) $this->CI->session->userdata('username');
        // if ($_SESSION["username"] != null) {
        //     return true;
        // } else {
        //     return false;
        // }
    }

    public function errors()
    {
        return implode("<br/>", $this->errors);
    }
}
