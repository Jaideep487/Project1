<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

       
        $this->load->library(['form_validation']);
        $this->load->database();

        $this->load->model('AuthModel');

    }

    public function index(){
        
        if($this->session->userdata('logged_in')){ 
        
        $this->load->view('dashboard');
        }else{
         redirect(base_url());
        }
    }
}
