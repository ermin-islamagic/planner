<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends CO_Controller {

    public function __construct()
    {
        parent::__construct();

        // Load form helper library
        $this->load->helper('form');

        // Load form validation library
        $this->load->library('form_validation');
    }

    public function index($current_page = NULL)
    {
        $user = $this->authentication_m->read_information();

        if($user){
            redirect('/finance');
        }

        $data['message_array'] = $this->session->flashdata('message_array');

        $action = $this->input->post('action');

        if($action === 'singin'){
            if($this->form_validation->run('login') !== FALSE){

                $account_exists = $this->authentication_m->check_for_account();
                if($account_exists){
                    // Add user data in session
                    $this->session->set_userdata('logged_in', array( 'email' => $this->input->post('email') ));
                    $user = $this->authentication_m->read_information();

                    if($user){
                        //enter your site
                        redirect('/finance');
                    }
                }else{

                    $data['message_array'] = array('type' => 'danger', 'message' => '<h4>Error:</h4>Wrong email or password!');
                }
            }else{
                $data['message_array'] = array('type' => 'danger', 'message' => '<h4>Error:</h4>'.validation_errors().'');
            }
        }

        $this->render(array('pages/authentication/index'), $data);
    }

    public function forgot()
    {
        $action = $this->input->post('action');
        $this->load->helper('string');

        $data['message_array'] = array();

        if ($action == 'forgot') {

            $email = $this->input->post('email');

            if($this->form_validation->run() === TRUE){

                $mal_chk = $this->authentication_m->check_mail($email);
                if($mal_chk){
                    $hash = random_string('alnum', 32);

                    $data['message_array'] = $this->authentication_m->insert_hash($hash, $mal_chk->id, $email);
                }
            }else{
                $data['message_array'] = array('type' => 'danger', 'message' => '<h4>Error:</h4>' . validation_errors() . '');
            }
        }

        $this->render(array('pages/authentication/forgot'), $data);
    }

    public function new_password($hash)
    {

        if(!$this->authentication_m->check_hash($hash)){
            redirect('forgot');
        }

        $action = $this->input->post('action');

        $data['message_array'] = array();

        if ($action === 'new_password'){

            if($this->form_validation->run('new_password') === TRUE){

                $return_message = $this->authentication_m->new_password($hash);

                $this->session->set_flashdata('message_array', $return_message);

                redirect('/');
            }else{
                $data['message_array'] = array('type' => 'danger', 'message' => '<h4>Error:</h4>' . validation_errors() . '');
            }
        }

        $this->render(array('pages/authentication/new_password'), $data);
    }

    public function logout()
    {
        // Removing session data
        $this->session->unset_userdata('logged_in', array( 'email' => '' ));

        // redirect user to login
        redirect('/');
    }
}