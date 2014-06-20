<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('rupiah')) {
	function rupiah($nominal)
	{
		if(!is_numeric($nominal)){
			$jadi = ' - ';
			return $jadi;
		}
		else{
			$jadi = "Rp." . number_format($nominal,2,',','.');
			return $jadi;
		}
	}
}