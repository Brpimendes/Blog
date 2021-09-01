<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('post_model', 'post');
	}
	
	public function index(){
		$allPosts = $this->post->findPost();

		$dados['posts'] = $allPosts;

		$this->load->view('layout', $dados);
	}
}