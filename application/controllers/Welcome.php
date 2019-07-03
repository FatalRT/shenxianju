<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function Welcome(){
        parent::__construct();
        $this->load->helper('url');
	}
	
	public function index()
	{
       $this->load->view ( 'home/index.html' );
	}
 public function huanye()
	{
		$this->load->view ( 'home/yemian.html' );
	}
}
