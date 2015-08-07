<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CO_Controller extends CI_Controller
{
    private $_site_config;

    public function __construct()
    {
        parent::__construct();

        $this->_site_config = $this->config->item('site_config');
    }

    /**
     * Render views
     * @param array $views Views array
     * @param array $data Data array
     */
    public function render($views = array(), $data = array())
    {

        $data['_site_config'] = $this->_site_config;

        $this->load->view('construct/page/header', $data);

        foreach($views as $view){
            $this->load->view($view, $data);
        }

        $this->load->view('construct/page/footer');
    }

}

/* End of file CO_Controller.php */
/* Location: ./application/controllers/CO_Controller.php */