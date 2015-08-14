<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'all' => 'All',
            'income' => 'Income',
            'costs' => 'Costs',
            'doc-type-1' => 'Doc type 1',
            'doc-type-2' => 'Doc type 2',
            'doc-type-3' => 'Doc type 3',
        );
    }
}