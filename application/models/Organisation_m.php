<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organisation_m extends CI_Model
{
    public function getUsers(){
        return $this->db->get('users')->result();
    }
}