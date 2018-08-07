<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_member');
	}

	function index(){
		$data['user'] = $this->m_member->ambil_data()->result();
		$this->load->view('account/v_member.php',$data);
	}

}