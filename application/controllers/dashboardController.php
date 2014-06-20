<?php
/**
* 
*/
class DashboardController extends Ajax_Request
{
	
	function index(){
		$data['title']	= "Dashboard";
		$this->load->view('isi/dashboard',$data);
	}
}