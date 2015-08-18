<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organisation_m extends CO_Model
{
    public function __construct(){
        parent::__construct();
    }

    public function getUsers(){
//        [id] => 1
//            [name] => Sale
//            [surname] => Bey
//            [email] => sale@creativeoutsourcing.nl
//            [password] => 1adbb3178591fd5bb0c248518f39bf6d
//            [role] => 10
//            [is_active] => 1
//            [group_id] => 1
//            [status_message] => 1
//            [currency] => EUR
//            [hourly_rate] => 1.60
//            [image_url] =>
//            [phone] =>
//            [skype_id] => sale.music
//            [created] => 2015-03-31 15:17:33
//        $this->db->select('name, surname, email');
//        return $this->db->get('users')->result();
    }

}