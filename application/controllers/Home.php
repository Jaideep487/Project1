<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();

        $this->load->model('AuthModel', 'login');
    }


    public function index()
	{
		$this->load->view('login');
	}

    public function doLogin(){

        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $check_login = $this->login->checkLogin($username, $password);

        if ($check_login) {
            $this->session->set_userdata('logged_in', true);
            $this->session->set_userdata('logged_name', 'JaiDeep Singh Makh');
            redirect(base_url('index.php/dashboard'));
        }else{
            $this->session->set_userdata('logged_in', false);
            redirect(base_url());
        }

    }




    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect(base_url());
    }
}