<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'lead' => 'Lead',
            'prospect' => 'Prospect',
            'mql' => 'MQL',
            'sql' => 'SQL',
        );
    }

}