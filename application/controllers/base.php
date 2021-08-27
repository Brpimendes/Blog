<?php if ( !defined('BASEPATH') ) exit('No direct script access allowed');

class Base extends CI_Controller {
	function __construct(){
		parent::__construct();		
	}
	
	public function index(){
		$this->load->views('home');
	}
}