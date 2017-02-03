
<?php
Class Liste extends CI_Controller {

public function __construct() {
parent::__construct();
}

public function index() {
	 $this->get_pagination();
	 //$this->db->order_by('annonce');
	$data['query'] = $this->db->get('annonce');
$this->load->view('list_annonce',$data );
}

public function get_pagination(){
	       
            $config['base_url'] = base_url().'itemlist/index/';
            $config['total_rows'] = $this->db->get('annonce')->num_rows();
            $config['per_page'] = 4;
            $config['num_links'] = 5;
            
            //appy css on pagination
            
//            $config['page_query_string'] = TRUE;
//            // $config['use_page_numbers'] = TRUE;
//            $config['query_string_segment'] = 'page';

            $config['full_tag_open'] = '<ul class="pagination pagination-sm">';
            $config['full_tag_close'] = '</ul><!--pagination-->';

            $config['first_link'] = '&laquo;';
            $config['first_tag_open'] = '<li class="prev page">';
            $config['first_tag_close'] = '</li>';
//
            $config['last_link'] = '&raquo;';
            $config['last_tag_open'] = '<li class="next page">';
            $config['last_tag_close'] = '</li>';
//
            $config['next_link'] = '&rarr;';
            $config['next_tag_open'] = '<li class="next page">';
            $config['next_tag_close'] = '</li>';
//
            $config['prev_link'] = '&larr;';
            $config['prev_tag_open'] = '<li class="prev page">';
            $config['prev_tag_close'] = '</li>';

            $config['cur_tag_open'] = '<li class="active"><a href="">';
            $config['cur_tag_close'] = '</a></li>';

            $config['num_tag_open'] = '<li class="page">';
            $config['num_tag_close'] = '</li>';

            //   $config['display_pages'] = FALSE;
            // 
//          $config['anchor_class'] = 'follow_link';
            
            $this->pagination->initialize($config);
    }
}
?>


