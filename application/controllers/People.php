<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class People extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'co-employee' => 'CO Employee',
            'lead' => 'Lead',
            'prospect' => 'Prospect',
            'mql' => 'MQL',
            'sql' => 'SQL',
            'client' => 'Client',
            'vendor' => 'Vendor',
            'partner' => 'Partner'
        );
    }
}