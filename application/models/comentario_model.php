<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Comentario_model extends CI_Model {
	protected $db;

    public function __construct(){
        parent::__construct();
        $this->db = $this->load->database('blog', TRUE);
    }
	
	public function findComents(){
        $qry = $this->db->get('comentarios');
        
        if( $qry->num_rows() ){
            $row = $qry->row(1);

            $dados = $qry->result_array($row);

            return $dados;            
        } else {
            return NULL;
        }
	}
}