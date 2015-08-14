<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CO_Controller extends CI_Controller
{
    private $_site_config;

    private $_current_user;

    public $_controller_slug;

    public function __construct()
    {
        parent::__construct();

        $this->_site_config = $this->config->item('site_config');

        $this->_controller_slug = strtolower($this->uri->segment(1));

        $this->_current_user = $this->authentication_m->read_information();

        // check if slug is in model config
        if(array_key_exists($this->uri->segment(1), $this->_site_config['can_see_navigation'])){

            // check model if exists
            if( file_exists( APPPATH  . 'models/' . ucfirst($this->uri->segment(1)) . '_m.php' ) ){

                // load model
                $this->load->model($this->uri->segment(1) . '_m', 'connection');
            }
        }
    }

    /**
     * Render views
     * @param array $views Views array
     * @param array $data Data array
     */
    public function render($views = array(), $data = array())
    {
        $this->authentication_m->authentication_check($this->_current_user, $this->_controller_slug);

        $data['_site_config'] = $this->_site_config;

        $data['_current_user'] = $this->_current_user;

        $this->load->view('construct/page/header', $data);

        // for profile page don't show standard navigation
        if($this->_controller_slug !== 'profile'){
            $this->load->view('construct/page/navigation', $data);
        }else{
            //$this->load->view('construct/page/navigation', $data);
        }

        foreach($views as $view){
            $this->load->view($view, $data);
        }

        $this->load->view('construct/page/footer');
    }

    /**
     * Function: sanitize
     * Returns a sanitized string, typically for URLs.
     *
     * Parameters:
     *     $string - The string to sanitize.
     *     $force_lowercase - Force the string to lowercase?
     *     $anal - If set to *true*, will remove all non-alphanumeric characters.
     */
    function sanitize($string, $force_lowercase = true, $anal = false) {
        $strip = array("~", "`", "!", "@", "#", "$", "%", "^", "&", "*", "(", ")", "_", "=", "+", "[", "{", "]",
            "}", "\\", "|", ";", ":", "\"", "'", "&#8216;", "&#8217;", "&#8220;", "&#8221;", "&#8211;", "&#8212;",
            "—", "–", ",", "<", ".", ">", "/", "?");
        $clean = trim(str_replace($strip, "", strip_tags($string)));
        $clean = preg_replace('/\s+/', "-", $clean);
        $clean = ($anal) ? preg_replace("/[^a-zA-Z0-9]/", "", $clean) : $clean ;
        return ($force_lowercase) ?
            (function_exists('mb_strtolower')) ?
                mb_strtolower($clean, 'UTF-8') :
                strtolower($clean) :
            $clean;
    }


    public function index()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/read'),$this->_data);
    }

    public function create()
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
    public function createType()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/create_type'),$this->_data);
    }

    /**
     * Document type update
     */
    public function updateType()
    {
        $this->render(array('pages/' . $this->_controller_slug . '/update_type'),$this->_data);
    }

    /**
     * Document type ajax create
     */
    public function ajaxCreateType(){

        $data['data'] = array();
        $this->load->view('ajax/json', $data);
    }
}

/* End of file CO_Controller.php */
/* Location: ./application/controllers/CO_Controller.php */