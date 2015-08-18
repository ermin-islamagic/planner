<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Organisation extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'all' => 'All',
            'ws-account-manager' => 'WS Account Manager',
            'ws-account-executive' => 'WS Account Executive',
            'ws-account-assistant' => 'WS Account Assistant',
            'ws-graphic-designer' => 'WS Graphic Designer',
            'ux-ui-designer' => 'UX/UI designer',
            'web-developer' => 'Web Developer',
        );
    }

    /**
     * Create users
     */
    public function createUser(){
        $this->render(array('pages/' . $this->_controller_slug . '/create_user'),$this->_data);
    }

    /**
     * List users
     * */
    public function listUsers(){
        print_r($this->connection->getUsers())  ;
    }
}