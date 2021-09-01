<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Post_model extends CI_Model {
    protected $db;

    public function __construct(){
        parent::__construct();

        $this->db = $this->load->database('blog', TRUE);
    }

    public function findPost(){        
        $qry = $this->db->get('posts');

        echo "<pre>"; print_r($qry); echo "</pre>";
        
        if( $qry->num_rows() ){
            $row = $qry->row();
            return $row->title;

            // return $qry->result_array('title');
            
        } else {
            return NULL;
        }
	}
}