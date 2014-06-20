<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class homeController extends CI_Controller {


	public function index()
	{
		#Array Data
		$data['titsale']	=	"Home";

		#Template
		$this->load->view('home',$data);
	}
}
