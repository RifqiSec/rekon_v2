<?php
class MY_Controller extends CI_Controller{

	var $logged_in = FALSE;

	function __construct()
	{
		parent::__construct();
		$this->logged_in = $this->session->userdata('logged_in');
	}
}

class Login extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		if($this->logged_in == TRUE) die(redirect());
	}
}
class Lapangan extends MY_Controller{

	function __construct()
	{
		parent::__construct();
		if($this->logged_in == FALSE) die(show_404());
	}
}

class Office extends Lapangan{

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role')=="LAP") die(show_404());
	}
}
