<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CO_Model extends CI_Model
{
    public function __construct(){
        parent::__construct();
    }

    /**
     * Returns pagination items
     *
     * @param $_controller_slug String Table name
     * @return mixed
     */
    public function build_pagination($_controller_slug){
        // POST action
        $action = $this->input->post('items_per_page');

        // Init local var items per page.
        $data['items_per_page'] = NULL;

        // If post is set
        if(isset($action) && $action != ""){

            // We set the user action value only if limit value exists.
            if($action != 'All'){

                // Set into users session items_per_page
                $this->session->set_userdata('items_per_page',$action);

                // Number of items per page
                $data['items_per_page'] = $this->session->userdata('items_per_page');
            }else{

                // Since no limit value is selected the session resets.
                if($this->session->userdata('items_per_page')){

                    // Unset items_per_page from users session
                    $this->session->unset_userdata('items_per_page');
                }
            }
        }
        else{
            /*
             Mainly needed for pagination, we hold limit value only if exists, otherwise
             we use default value set in config file.
            */
            if($this->session->userdata('items_per_page')){
                $data['items_per_page'] = $this->session->userdata('items_per_page');
            }else{
                $data['items_per_page'] = $this->config->item('per_page');
            }
        }

        // Search url
        $data['search_url'] = base_url($_controller_slug . "/search");

        // Base url for pagination
        $data['base_url'] = base_url($_controller_slug);

        // Pagination configuration
        $config = array(
            'base_url' => base_url($_controller_slug . "/index"),
            'total_rows' => $this->count($_controller_slug),
            'per_page' => $data['items_per_page'],
            'num_links' => 3,
            // 'uri_segment' => 3,
        );

        // Init pagination configuration
        $this->pagination->initialize($config);

        // Pagination view data init
        $data['per_page'] = $this->config->item('items_list_array');
        $data['pagination'] = $this->pagination->create_links();

        // We propagate limit and start needed for pagination.
        // $data['current_page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        return $data;
    }

    /**
     * Returns pagination items
     *
     * @param $_controller_slug String Table name
     * @return mixed
     */
    public function build_pagination_with_type($_controller_slug, $type){
        // POST action
        $action = $this->input->post('items_per_page');

        // Init local var items per page.
        $data['items_per_page'] = NULL;

        // If post is set
        if(isset($action) && $action != ""){

            // We set the user action value only if limit value exists.
            if($action != 'All'){

                // Set into users session items_per_page
                $this->session->set_userdata('items_per_page',$action);

                // Number of items per page
                $data['items_per_page'] = $this->session->userdata('items_per_page');
            }else{

                // Since no limit value is selected the session resets.
                if($this->session->userdata('items_per_page')){

                    // Unset items_per_page from users session
                    $this->session->unset_userdata('items_per_page');
                }
            }
        }
        else{
            /*
             Mainly needed for pagination, we hold limit value only if exists, otherwise
             we use default value set in config file.
            */
            if($this->session->userdata('items_per_page')){
                $data['items_per_page'] = $this->session->userdata('items_per_page');
            }else{
                $data['items_per_page'] = $this->config->item('per_page');
            }
        }

        // Search url
        $data['search_url'] = base_url($_controller_slug . "/search");

        // Base url for pagination
        $data['base_url'] = base_url($_controller_slug);

        // Pagination configuration
        $config = array(
            'base_url' => base_url($_controller_slug . "/type/" . $type),
            'total_rows' => $this->count_with_type($_controller_slug, $type),
            'per_page' => $data['items_per_page'],
            'num_links' => 3,
            // 'uri_segment' => 3,
        );

        // Init pagination configuration
        $this->pagination->initialize($config);

        // Pagination view data init
        $data['per_page'] = $this->config->item('items_list_array');
        $data['pagination'] = $this->pagination->create_links();

        // We propagate limit and start needed for pagination.
        // $data['current_page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        return $data;
    }

    /**
     * Function returns search query LIKE %$search% for each table column
     * @param $search
     * @return string
     */
    private function build_search_query($_controller_slug, $search){
        
        // Table columns
        $fields = $this->db->list_fields($_controller_slug);

        // Query to return
        $query = '';

        // Each table column
        foreach ($fields as $field)
        {
            // Build search query
            $query .= "$_controller_slug.$field LIKE '%" . trim($search) . "%' ";
        }

        // return query
        return $query;
    }

    /**
     * Counts result items
     *
     * @param null $search If set searchable items would be count in
     * @return int Int Returns number of items
     */
    public function count($_controller_slug, $search = null){
        $this->db->select('*');
        $this->db->from($_controller_slug);

        // If search is set
        if(isset($search)){
            // Build search query
            $search_query = $this->build_search_query();

            $this->db->where($search_query, NULL, FALSE);
        }

        $this->db->order_by("id", "asc");
        $query = $this->db->get();

        // Return number of results
        return ((int)$query->num_rows() > 0) ? count($query->result_array()) : 0;
    }

    /**
     * Counts result items with types
     *
     * @param null $search If set searchable items would be count in
     * @return int Int Returns number of items
     */
    public function count_with_type($_controller_slug, $type, $search = null){
        $this->db->select('*');
        $this->db->from($_controller_slug);

        // If search is set
        if(isset($search)){
            // Build search query
            $search_query = $this->build_search_query();

            $this->db->where($search_query, NULL, FALSE);
        }

        $this->db->order_by("id", "asc");
        $query = $this->db->get();

        // Return number of results
        return ((int)$query->num_rows() > 0) ? count($query->result_array()) : 0;
    }

    /**
     * Returns rows from database
     *
     * @param $limit Int Limit result
     * @param $start Int Offset result
     * @param null String $search If set searchable items would be count in
     * @return mixed array Return rows of items
     */
    public function get_rows($_controller_slug, $limit, $start, $search = null){
        $this->db->select('*');
        $this->db->from($_controller_slug);

        // If search is set
        if(isset($search)){
            // Build search query
            $search_query = $this->build_search_query();

            $this->db->where($search_query, NULL, FALSE);
        }

        $this->db->order_by("id", "asc");
        ($limit) ? $this->db->limit($limit, $start) : FILTER_FLAG_EMPTY_STRING_NULL;
        $query = $this->db->get();
        return $query->result();
    }

    /**
     * Returns rows with types from database
     *
     * @param $limit Int Limit result
     * @param $start Int Offset result
     * @param null String $search If set searchable items would be count in
     * @return mixed array Return rows of items
     */
    public function get_rows_with_type($_controller_slug, $type, $limit, $start, $search = null){
        $this->db->select('*');
        $this->db->from($_controller_slug);

        // If search is set
        if(isset($search)){
            // Build search query
            $search_query = $this->build_search_query();

            $this->db->where($search_query, NULL, FALSE);
        }
        $this->db->order_by("id", "asc");
        ($limit) ? $this->db->limit($limit, $start) : FILTER_FLAG_EMPTY_STRING_NULL;
        $query = $this->db->get();
        return $query->result();
    }

}