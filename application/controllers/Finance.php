<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CO_Controller
{
    private $_data;

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

    public function index()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'),$this->_data);
    }

    public function create($type = null)
    {
        $this->render(array('pages/' . $this->_controller_slug . '/create'),$this->_data);
    }

    public function update()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/update'),$this->_data);
    }

    public function delete()
    {
        redirect($this->uri->segment(1));
    }

    /**
     * Document type
     */
    public function type($type = 'all')
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'),$this->_data);
    }

    /**
     * Document type create
     */
    public function typeCreate()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/type_create'),$this->_data);
    }

    /**
     * Document type update
     */
    public function typeUpdate()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/type_update'),$this->_data);
    }

//        echo $this->sanitize("This is sparta");
}