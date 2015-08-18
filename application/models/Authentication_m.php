<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication_m extends CI_Model
{
    private $_table = 'organisation';
    
    public function __construct(){
        
    }
    
    /**
     * Function should be put before any view render
     * non authenticated user can only see authentication, forgot and new password page
     *
     * @param $_current_user Object User object or false if no user
     * @param $_controller_slug String Current url
     */
    public function authentication_check($_current_user, $_controller_slug ){
        if(
            !$_current_user
            && $_controller_slug !== "authentication"
            && $_controller_slug !== "forgot"
            && $_controller_slug !== "new_password"
        ){
            redirect('authentication');
        }
    }

    /**
     * Insert registration data in database
     * @return bool
     */
    public function registration_insert()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'surname' => $this->input->post('surname'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        );

        // Query to check whether username already exist or not
        $query = $this->db->get_where($this->_table, array("email" => $data['email']));
        if (!$query->num_rows()) {

            // Query to insert data in database
            $this->db->insert($this->_table, $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            }
        } else {
            return false;
        }
    }

    /**
     * Read data using username and password
     * @return bool
     */
    public function check_for_account()
    {
        $query = $this->db->get_where($this->_table, array(
            "email" => $this->input->post('email'),
            "password" => $this->input->post('password')
        ));

        if ($query->row()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Read data from database to show data in admin page
     * @param bool|false $get_id
     * @return bool
     */
    public function read_information($get_id = false)
    {
        $session = $this->session->userdata('logged_in');

        $session = ($session) ? $session : array();
        if(!array_key_exists('email', $session)){
            return false;
        }

        $query = $this->db->get_where($this->_table, array("email" => $session['email']));

        if($get_id){
            return $query->row()->id;
        }else{
            return $query->row();
        }
    }

    public function get_users()
    {
        $query = $this->db->get($this->_table);
        return $query->result();
    }

    public function check_mail($mail)
    {
        $query = $this->db->get_where($this->_table, array("email" => $mail));
        if($query->num_rows() == 1) return $query->row();
        else return FALSE;
    }

    public function insert_hash($hash, $user_id, $email)
    {
        //remove existing hash if it exists
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('reset_password');

        if($query->row()){
            $this->db->delete('reset_password', array('id' => $query->row()->id));
        }

        // insert new hash
        $this->db->insert('reset_password', array('hash' => $hash, 'user_id' => $user_id));

        $this->load->library('email');
        $this->email->initialize($this->config->item('email'));

        $this->email->from('no-reply@creativeoutsourcing.nl');
        $this->email->subject('Password reset');
        $this->email->to($email);
        $this->email->message('Click here to reset your password <a href="' . base_url("new_password/$hash") . '">' . base_url("new_password/$hash") . '</a>');
        if($this->email->send()){
            return array('type' => 'success', 'message' => "Password reset link successfully sent to $email.");
        }else{
            return array('type' => 'danger', 'message' => "Error while sending message, please try again later.");
        }
    }

    public function check_hash($hash)
    {
        $query = $this->db->get_where('reset_password', array('hash'=>$hash));
        $row = $query->row();

        if($row){

            // delete timestamp if it is 24h older from now
            if(strtotime($row->created)  <= (time() - 86400)){
                $this->db->delete('reset_password', array('id'=> $row->id ));
                return false;
            }

            return true;
        }else{
            return false;
        }
    }

    public function new_password($hash){
        $query = $this->db->get_where('reset_password', array('hash'=>$hash));

        $user_id = $query->row()->user_id;

        $this->db->where('id', $user_id);
        $this->db->update($this->_table, array('password' => $this->input->post('password')));

        $this->db->delete('reset_password', array('id' => $user_id));

        return array('type' => 'success', 'message' => "Your password has been updated!");
    }
}