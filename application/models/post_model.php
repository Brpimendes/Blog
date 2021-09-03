<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Post_model extends CI_Model {
    protected $db;

    public function __construct(){
        parent::__construct();

        $this->db = $this->load->database('blog', TRUE);
    }

    public function findPost(){        
        $qry = $this->db->get('posts');
        
        if( $qry->num_rows() ){
            $row = $qry->row();

            $dados = $qry->result_array($row);

            return $dados;            
        } else {
            return NULL;
        }
	}
}