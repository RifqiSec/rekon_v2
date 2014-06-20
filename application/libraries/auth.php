<?php
/**
* @author : Rifqi Maulana
*/
class Auth
{
	
	public $core;
     
    public function __construct() {
        $this->core =& get_instance();
        $this->core->load->library('session');
    }
 
    public function authenticate(CI_DB_result $query) {
        if($query->num_rows()==0){
        	return FALSE;
        }
        else{
        	$user = $query->row();
        	$this->core->session->set_userdata(array(
	            'id' 		=> $user->id,
	            'logged_in' => TRUE,
	            'role'		=> $user->role,
	            'username'	=> $user->username,
	            'nama'		=> $user->nama,
	            'project'	=> $user->project
       		));
        }
    }

    public function hash($password){
    	if(!is_null($password)){
    		$encrypt = "$2a".sha1(base64_encode(md5($password)));
    		return $encrypt;
    	}
    	else{
    		return FALSE;
    	}
    }
     
    public function logout() {
        $this->core->session->sess_destroy();
    }
}