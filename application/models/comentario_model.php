<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Comentario extends CI_Model {
	protected $table = 'comentario';
    protected $allowesFields = [
        'posts_id',
        'comentario',
    ];
	
	public function index(){
		
	}
}