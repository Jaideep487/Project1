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
            if ($check_login['perm']== 1){
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('logged_name', $check_login['lname']);
                redirect(base_url('index.php/dashboard'));
            }elseif($check_login['perm'] == 2){
                $this->session->set_userdata('admin_logged_in', true);
                $this->session->set_userdata('admin_logged_name', $check_login['lname']);
                redirect(base_url('index.php/admin'));
            }
        }else{
            $this->session->set_userdata('logged_in', false);
            $this->session->set_userdata('admin_logged_in', false);
            redirect(base_url());
        }

    }




    public function logout() {
        $this->session->unset_userdata('logged_in');
        redirect(base_url());
    }
}