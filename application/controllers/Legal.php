<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Legal extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'all' => 'All',
            'contracts' => 'Contracts',
            'non-disclosure-agreement' => 'Non-Disclosure Agreement (NDA)',
            'purchase-order' => 'Purchase Order',
        );
    }
}