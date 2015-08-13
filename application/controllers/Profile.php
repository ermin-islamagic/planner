<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'));
    }

    public function create()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/create'));
    }

    public function update()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/update'));
    }

    public function delete()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/delete'));
    }
}