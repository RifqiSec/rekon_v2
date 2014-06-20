<?php
/**
* 
*/
class PoController extends Ajax_Request
{
	
	function index(){
		$data['title'] = "Purchase Order";
		$data['content'] = "Halaman Purchase Order";
		$this->load->view('isi/po',$data);
	}
}