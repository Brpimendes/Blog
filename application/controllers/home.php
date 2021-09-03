<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('post_model', 'post');
	}
	
	public function index(){
		$allPosts = $this->post->findPost();

		// echo "<pre>"; print_r($allPosts[0]['body']); echo "</pre>";

		$this->load->view('layout', $allPosts);
	}
}