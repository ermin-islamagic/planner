<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CO_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function create()
    {

        $this->render(array('users/index'));
    }

    public function index()
    {

        $this->render(array('users/index'));
    }

    public function update()
    {

        $this->render(array('users/index'));
    }

    public function delete()
    {

        $this->render(array('users/index'));
    }

}