<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class AuthModel extends CI_Model {

    public function checkLogin($username, $password) {
        $this->db->where('username', $username);
        $this->db->where('pwd', $password);
        $query = $this->db->get('users');

        if($query -> num_rows() == 1)
	   {
		 return $query->row_array();
	   }
	   else
	   {
		 return false;
	   }
    }
}