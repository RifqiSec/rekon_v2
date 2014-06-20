<?php

if(!function_exists('ajax'))
{
	function ajax(){
		if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest") {
        	return TRUE;
        }
        else{
          	return FALSE;
        } 
	}
}
