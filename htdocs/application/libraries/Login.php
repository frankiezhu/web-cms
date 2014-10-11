<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login {

	public function __construct()		
	{
		if (!isset($_SESSION['user_info']))
		{
			$_SESSION['user_info']['has_login'] = false;
			$_SESSION['user_info']['user_name'] =  '';
		}
	}
	
	public function login($db, $username='', $password='')
	{
		$db->where("username", $username);
		$query = $db->get('account');
		if ($query->num_rows() == 0)
		{
			return false;
		}
		$data_array = $query->result_array();
		$data = $data_array[0];
		if (md5(md5($password).$data['salt'])== $data['encrypt_str'])
		{
			$_SESSION['user_info']['has_login'] = true;
			$_SESSION['user_info']['user_name'] =  $username;
			return true;
		}
		return false;
	}	
	
	public function has_login()
	{
		if (config_item('poster_user_login_check'))
		{
			return $_SESSION['user_info']['has_login'];
		}
		else
		{
			return true;
		}
	}
	
	public function get_user_info()
	{
		if (!isset($_SESSION['user_info']))
		{
			$_SESSION['user_info']['has_login'] = false;
			$_SESSION['user_info']['user_name'] =  '';
		}
		return $_SESSION['user_info'];
	}
}
