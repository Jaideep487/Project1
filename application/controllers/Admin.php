<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();

       
        $this->load->library(['form_validation']);
        $this->load->database();

        $this->load->model('AuthModel');

    }

    public function index(){
        
        if($this->session->userdata('admin_logged_in')){ 
        
        $this->load->view('admin');
        }else{
         redirect(base_url());
        }
    }
}
