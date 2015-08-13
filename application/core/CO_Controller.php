<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CO_Controller extends CI_Controller
{
    private $_site_config;

    public $_controller_slug;

    public function __construct()
    {
        parent::__construct();

        $this->_site_config = $this->config->item('site_config');

        $this->_controller_slug = $this->uri->segment(1);
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

}

/* End of file CO_Controller.php */
/* Location: ./application/controllers/CO_Controller.php */