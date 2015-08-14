<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Planner extends CO_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->_data['types'] = array(
            'all' => 'All',
            'clients' => 'Clients',
            'inhouse' => 'Inhouse',

            'banner' => 'Banner',
            'interactive-banner' => 'Interactive Banner',
            'newsletter' => 'Newsletter',
            'website' => 'Website',
            'mobile-app' => 'Mobile App',
            'presentation' => 'Presentation',

            'sales' => 'Sales',
            'improvements' => 'Improvements',

            'administration' => 'Administration',
            'finance' => 'Finance',
            'legal' => 'Legal',
            'people' => 'People',
            'vendors' => 'Vendors',


            'administration' => 'Administration',
            'finance' => 'Finance',
            'legal' => 'Legal',
            'hr' => 'HR',
            'vendor' => 'Vendor',
        );
    }

}