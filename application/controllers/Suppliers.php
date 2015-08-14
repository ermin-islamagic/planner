<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suppliers extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'));
    }
}