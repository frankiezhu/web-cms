<?php

define('PAGE_STR', 'page');
define('PERPAGE', 20);

class Poster extends CI_Controller
{
	private	$search_condtion = array(
					"city"=> array("all", "City A", "City B"),
					"price"=> array("all", "0-100", "100-1000", "1000-10000", "10000_a"),
					"status"=> array("all", "done", "new_price", "dealing"),
					"time"=> array("all", "week", "month", "year")
					);
	
	function __construct()
    {
		session_start();
        parent::__construct();
		
		$this->conf_resource_dir = BASEPATH."../web/resource";
		$this->load->library('MySmarty');
		$this->load->library('login');
		$this->load->library('pagination');
		$this->load->helper('passcode');
    }
	
	//////////////////////////////////signin//////////////////////////////////////////
	public function passcode()
	{
		$code = gen_passcode2(120, 40, 4);
		$_SESSION['passcode'] = $code;
	}
	
	public function check_passcode()
	{
		if(strtolower($this->input->post('passcode')) == strtolower($_SESSION['passcode']))
		{
			echo '1'; 
		}
	}

	public function signin()
    {
		$err_msg = '';
		$post = $this->uri->segment(3, "");
		if ($post != "login")
		{
			goto out;
		}
		$mail = $this->input->post('mail');
		$password = $this->input->post('password');
		if ($this->login->login($this->db, trim($mail), trim($password)))
		{
			return $this->index();
		}
		else
		{
			$err_msg = '密码错误';
		}
	out:
		$this->mysmarty->assign("err_msg", $err_msg, true);
        $this->mysmarty->display("signin.html");
    }
	
	public function logout()
	{
		session_unset();
		return $this->index();
	}
	

	//////////////////////////////////index&sold////////////////////////////////////////
	
	public function set_search_condition()
	{
		$city = $this->session->userdata('city');
		if ($city && $city != "all")
		{
			$this->db->where('city', $city);
		}
		
		$price = $this->session->userdata('price');
		switch ($price)
		{
		case $this->search_condtion["price"][1]:
			$this->db->where("price >=", 0);
			$this->db->where("price <=", 100);
			break;
		case $this->search_condtion["price"][2]:
			$this->db->where("price >=", 100);
			$this->db->where("price <=", 1000);
			break;
		case $this->search_condtion["price"][3]:
			$this->db->where("price >=", 1000);
			break;
		default:
			break;
		}
		
		$status = $this->session->userdata('status');
		if ($status && $status != "all")
		{
			$this->db->where("s_$status", 1);
		}
		
		$this->db->where("s_done !=", 1);
		
		$time = $this->session->userdata('time');
		switch ($time)
		{
		case $this->search_condtion["time"][1]:
			$prev_time = date("Y-m-d H:i:s", strtotime('-1 week'));
			$this->db->where("update_time >=", $prev_time);
			break;
		case $this->search_condtion["time"][2]:
			$prev_time = date("Y-m-d H:i:s", strtotime('-1 month'));
			$this->db->where("update_time >=", $prev_time);
			break;
		case $this->search_condtion["time"][3]:
			$prev_time = date("Y-m-d H:i:s", strtotime('-1 year'));
			$this->db->where("update_time >=", $prev_time);
			break;
		default:
			break;
		}
		
		$search = array("city"=>$city,
					"price"=>$price,
					"status"=>$status,
					"time"=>$time);
		return $search;
	}
	
    public function index()
    {
		$page = (int)$this->input->get(PAGE_STR, TRUE);
		$page =  ($page >= 1) ? $page: 1;
		$this->set_search_condition();
		$this->db->from('poster');
		$total = $this->db->count_all_results();
	
		$search = $this->set_search_condition();
		$this->db->order_by("top", "desc");
		$this->db->order_by("update_time", "desc");
		$this->db->limit(PERPAGE, ($page-1)*PERPAGE);
		$query = $this->db->get('poster');
		$data_array = $query->result_array();
		
		$config["base_url"] = $config["first_url"] = base_url(). "poster";
        $config["total_rows"] = $total;
		$config["per_page"] = PERPAGE;
		$config["query_string_segment"] = PAGE_STR;
		$this->pagination->initialize($config);
		$pagin_data = $this->pagination->create_links();
		
		$this->mysmarty->assign("pagination", $pagin_data, true);
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("search", $search, true);
		$this->mysmarty->assign("data_array", $data_array, true);
		
        $this->mysmarty->display("main.html");
    }

	public function city()
    {
		$city = rawurldecode($this->uri->segment(3, "all"));
		if (!in_array($city, $this->search_condtion["city"]))
		{
			$city = "all";
		}
		$this->session->set_userdata("city", $city);	
        $this->index();
    }
	
	public function price()
    {		
		$price = $this->uri->segment(3, "all");
		if (!in_array($price, $this->search_condtion["price"]))
		{
			$price = "all";
		}
		$this->session->set_userdata("price", $price);
        $this->index();
    }
	
	public function status()
    {
		$status = $this->uri->segment(3, "all");
		if (!in_array($status, $this->search_condtion["status"]))
		{
			$status = "all";
		}
		$this->session->set_userdata("status", $status);
        $this->index();
	}
	
	public function time()
    {
		$time = $this->uri->segment(3, "all");
		if (!in_array($time, $this->search_condtion["time"]))
		{
			$time = "all";
		}
		$this->session->set_userdata("time", $time);
        $this->index();
    }
	
	public function sold()
    {
		$page = (int)$this->input->get(PAGE_STR, TRUE);
		$page =  ($page >= 1) ? $page: 1;
		$this->db->where('s_done', 1);
		$this->db->from('poster');
		$total = $this->db->count_all_results();
		$this->db->where('s_done', 1);
		$this->db->order_by("top", "desc");
		$this->db->order_by("update_time", "desc");
		$this->db->limit(PERPAGE, ($page-1)*PERPAGE);
		$query = $this->db->get('poster');
		$data_array = $query->result_array();
		
		$config["base_url"] = $config["first_url"] = base_url(). "poster/sold";
        $config["total_rows"] = $total;
		$config["per_page"] = PERPAGE;
		$config["query_string_segment"] = PAGE_STR;
		$this->pagination->initialize($config);
		$pagin_data = $this->pagination->create_links();
		
		$this->mysmarty->assign("pagination", $pagin_data, true);
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("data_array", $data_array, true);
        $this->mysmarty->display("sold.html");
    }
	
	//////////////////////////////////detail&admin/////////////////////////////////////
	public function detail($id)
    {
		$data = array();
		$imgs = array();
		$desc = '';
		$err_msg = '';
		
		if (!$id)
		{
			$uniqid = $this->uri->segment(3, "");
		}
		else
		{
			$uniqid = $id;
		}
		
		if (!is_dir("$this->conf_resource_dir/$uniqid"))
		{
			$err_msg .= "dir no found<br>";
			goto out;
		}

		$this->db->where('uniqid', $uniqid);
		$query = $this->db->get('poster');
		if ($query->num_rows() == 0)
		{
			$err_msg .= "query return nothing<br>";
			goto out;
		}
		$result = $query->result_array();
		$data = $result[0];
		for ($i = 0; $i < 5; $i++) 
		{
			$name = $this->conf_resource_dir."/$uniqid/img$i.jpg";
			if (file_exists($name))
			{
				$imgs[] = "img$i.jpg";
			}
		}
	out:
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("uniqid", $uniqid, true);
		$this->mysmarty->assign("imgs", $imgs, true);
		$this->mysmarty->assign("err_msg", $err_msg, true);
		$this->mysmarty->assign("data", $data, true);
        $this->mysmarty->display("detail.html");
    }
	
	public function get_detail($uniqid)
	{
		$err_msg = '';
		$data = array();
		$path = "$this->conf_resource_dir/$uniqid/detail.html";
		$detail = file_get_contents($path);
		if (!$detail)
		{
			$detail = '';
			$err_msg .= "read $path failed<br>";
			goto out;
		}
		$this->db->where('uniqid', $uniqid);
		$query = $this->db->get('poster');
		if ($query->num_rows() == 0)
		{
			$err_msg .= "query return nothing<br>";
			goto out;
		}
		$result = $query->result_array();
		$data = $result[0];
	out:
		$rep = array(
					"err_msg"=>$err_msg,
					"data"=>$data,
					"detail"=>$detail,
					);
		echo json_encode($rep);
	}

	public function admin_post()
    {
		if (!$this->login->has_login())
		{
			return $this->signin();
		}
		$err_msg = '';
		$action = $this->uri->segment(3, "");
		$id = $this->uri->segment(4, "");
		$add = True;
		switch ($action)
		{
		case "top":
			{
			$this->db->set('top', 1);
			$update_time = date("Y-m-d H:i:s");
			$this->db->set('update_time', $update_time);
			$this->db->where('uniqid', $id);
			$this->db->update('poster');
			return $this->detail($id);
			}
		case "delete":
			{
			$this->db->where('uniqid', $id);
			$this->db->delete('poster'); 
			return $this->index();
			}
		case "add":
			break;
		case "update":
			$add = False;
			break;
		default:
			goto out;
		}
		$top = $this->input->post('top', true);
		$this->db->set('top', $top);
		
		$title = $this->input->post('title', true);
		$this->db->set('title', $title);
		
		$update_time = date("Y-m-d H:i:s");
		if ($add)
		{
			$this->db->set('create_time', $update_time);
		}
		$this->db->set('update_time', $update_time);
		
		if ($add)
		{
			$uniqid = md5($update_time.$title);
			$this->db->set('uniqid', $uniqid);
		
			$img_dir = $this->conf_resource_dir."/$uniqid";
			if (!mkdir($img_dir))
			{
				$err_msg .= "Mkdir $img_dir failed<br>";
				goto out;
			}
		}
		else
		{
			$uniqid = $id;
			$img_dir = $this->conf_resource_dir."/$id";
		}
		$desc = $this->input->post('short_desc', true);
		$this->db->set('short_desc', $desc);
		
		$city = $this->input->post('city', true);
		$this->db->set('city', $city);
		
		$addr = $this->input->post('addr', true);
		$this->db->set('addr', $addr);
		
		$lat = $this->input->post('lat', true);
		$this->db->set('lat', $lat);
		
		$lng = $this->input->post('lng', true);
		$this->db->set('lng', $lng);
		
		$price = $this->input->post('price', true);
		$this->db->set('price', $price);
		
		$status_arr = $this->input->post('status', true);
		foreach ($status_arr as $status)
		{
			switch($status)
			{
				case "1":
					$this->db->set('s_done', 1);
					break;
				case "2":
					$this->db->set('s_new_price', 1);
					break;
				case "3":
					$this->db->set('s_dealing', 1);
					break;
				default:
					$err_msg .= "error status:$status<br>";
			}
		}
		
		$detail = $this->input->post('hide_me', false);
		$detail_file = "$img_dir/detail.html";
		if (strlen($detail) > 8)
		{
			if (!file_put_contents($detail_file, $detail))
			{
				$err_msg .= "Write detail to $detail_file failed!<br>";
				goto out;
			}
		}
		else
		{
			$err_msg .= "detail too short<br>";
			goto out;
		}
		
		for ($i = 0; $i < 5; $i++) 
		{
			$name = "img$i";
			$orig_name = $_FILES[$name]["name"];
			if (empty($orig_name))
			{
				continue;
			}
			if ($_FILES[$name]["error"] > 0)
			{
				$err_msg .= "Upload $orig_name failed<br>";
				goto out;
			}
			$file_name = "$img_dir/$name.jpg";
			if (!move_uploaded_file($_FILES[$name]["tmp_name"], $file_name))
            {
                $err_msg .= "Move $orig_name failed<br>";
				goto out;
			}
		}
		if ($add)
		{
			$this->db->insert('poster');
		}
		else
		{
			$this->db->where('uniqid', $uniqid);
			$this->db->update('poster');
		}
		
		$aff = $this->db->affected_rows();
		if ($aff < 1)
		{
			$err_msg .= "Store to db failed, msg:".$this->db->_error_message()."<br>";
			goto out;
		}
		if (!$add)
		{
			return $this->detail($uniqid);
		}
		$err_msg .= "Add success, uniqid:$uniqid<br>";
	out:
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("uniqid", $id, true);
		$this->mysmarty->assign("err_msg", $err_msg, true);
		return $this->mysmarty->display("admin_post.html");
    }
	
	//////////////////////////////////headnews/////////////////////////////////////////////
	public function get_headnews()
	{
		$err_msg = '';
		$head_info_file = $this->conf_resource_dir."/system/head_info.html";
		$head_info = file_get_contents($head_info_file);
		if (!$head_info)
		{
			$head_info = '';
			$err_msg .= "read $head_info_file failed<br>";
		}
		$rep = array(
					"err_msg"=>$err_msg,
					"detail"=>$head_info,
					);
		echo json_encode($rep);
	}
	
	public function admin_headnews()
    {
		if (!$this->login->has_login())
		{
			return $this->signin();
		}
		$err_msg = '';
		$post = $this->uri->segment(3, "");
		if ($post != "form")
		{
			goto out;
		}
		$img = "head_img";
		$orig_name = $_FILES[$img]["name"];
		if (!empty($orig_name))
		{
			if ($_FILES[$img]["error"] > 0)
			{
				$err_msg .= "Upload $orig_name failed<br>";
				goto out;
			}
			$file_name = $this->conf_resource_dir."/system/$img.jpg";
			if (!move_uploaded_file($_FILES[$img]["tmp_name"], $file_name))
            {
                $err_msg .= "Move $orig_name failed<br>";
				goto out;
			}
			$err_msg .= "update $img success<br>";
		}

		$head_info = $this->input->post('hide_me', false);
		$head_info_file = $this->conf_resource_dir."/system/head_info.html";
		if (strlen($head_info) > 8)
		{
			if (!file_put_contents($head_info_file, $head_info))
			{
				$err_msg .= "Write content to $head_info_file failed!<br>";
				goto out;
			}
			$err_msg .="update head news success<br>";
		}
	out:
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("err_msg", $err_msg, true);
        $this->mysmarty->display("admin_headnews.html");
    }
	
	//////////////////////////////////about//////////////////////////////////////////
	public function about()
    {
		$err_msg = '';
		$data = array();
		$this->db->where('id', 1);
		$query = $this->db->get('basic_info'); 
		if ($query->num_rows() == 0)
		{
			$data = array('tel'=>'110', 'mail'=>'abc@qq.com', 'wechat'=>"hello");
		}
		else
		{
			$result = $query->result_array();
			$data = $result[0];
		}		
	out:
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("data", $data, true);
		$this->mysmarty->assign("err_msg", $err_msg, true);
        $this->mysmarty->display("about.html");
    }
	
	public function get_my_info()
	{
		$err_msg = '';
		$data = array();
		$my_info_file = $this->conf_resource_dir."/system/head_info.html";
		$my_info = file_get_contents($my_info_file);
		if (!$my_info)
		{
			$my_info = '';
			$err_msg .= "read $my_info_file failed<br>";
			goto out;
		}
		$this->db->where('id', 1);
		$query = $this->db->get('basic_info'); 
		if ($query->num_rows() == 0)
		{
			$data = array('tel'=>'110', 'mail'=>'abc@qq.com', 'wechat'=>"hello");
		}
		else
		{
			$result = $query->result_array();
			$data = $result[0];
		}
	out:
		$rep = array(
					"err_msg"=>$err_msg,
					"data"=>$data,
					"detail"=>$my_info,
					);
		echo json_encode($rep);
	}
	
	public function admin_my_info()
    {
		if (!$this->login->has_login())
		{
			return $this->signin();
		}
		$err_msg = '';
		$post = $this->uri->segment(3, "");
		if ($post != "form" && $post != "detail")
		{
			goto out;
		}
		$tel = $this->input->post('tel', true);
		if ($tel)
		{
			$this->db->set('tel', $tel);
		}
		
		$mail = $this->input->post('mail', true);
		if ($mail)
		{
			$this->db->set('mail', $mail);
		}
		
		$wechat = $this->input->post('wechat', true);
		if ($wechat)
		{
			$this->db->set('wechat', $wechat);
		}
		if ($tel || $mail || $wechat)
		{
			$this->db->where('id', 1);
			$this->db->update('basic_info'); 
		}
		$imgs = array("wechat_img", "photo");
		foreach ($imgs as $img)
		{
			$orig_name = $_FILES[$img]["name"];
			if (empty($orig_name))
			{
				continue;
			}
			if ($_FILES[$img]["error"] > 0)
			{
				$err_msg .= "Upload $orig_name failed<br>";
				goto out;
			}
			$file_name = $this->conf_resource_dir."/system/$img.jpg";
			if (!move_uploaded_file($_FILES[$img]["tmp_name"], $file_name))
			{
				$err_msg .= "Move $orig_name failed<br>";
				goto out;
			}
			$err_msg .= "update $img success";
		}
		$my_info = $this->input->post('hide_me', false);
		$my_info_file = $this->conf_resource_dir."/system/my_info.html";
		if (strlen($my_info) > 8)
		{
			if (!file_put_contents($my_info_file, $my_info))
			{
				$err_msg .= "Write content to $my_info_file failed!<br>";
				goto out;
			}
			$err_msg .="update my info success<br>";
		}

	out:
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("err_msg", $err_msg, true);
        $this->mysmarty->display("admin_my_info.html");
    }
	
	//////////////////////////////////user//////////////////////////////////////////
	function admin_user()
	{
		$err_msg = '';
		if (!$this->login->has_login())
		{
			return $this->signin();
		}
		$form = $this->uri->segment(3, "");
		if ($form != "form")
		{
			goto out;
		}
		
		$action = $this->input->post('action', true);
		if ($action !="add" && $action !="del")
		{
			goto out;
		}
		
		$user = trim($this->input->post('username'));
		$password = trim($this->input->post('password'));
		if ($action == "add")
		{
			$this->db->set('username', $user);
			$salt = rand(100000, 999999);
			$this->db->set('salt', $salt);
			$encrypt_str = md5(md5($password).$salt);
			$this->db->set('encrypt_str', $encrypt_str);
			$this->db->insert('account');
		}
	    else if ($action == "del")
		{
				
			$this->db->where('username', $user);
			$this->db->delete('account');
		}
		$aff = $this->db->affected_rows();
		if ($aff < 1)
		{
			$err_msg .= "$action failed, $user";
		}
		else
		{
			$err_msg .= "$action success, $user";
		}
	out:
		$this->mysmarty->assign("user_info", $this->login->get_user_info(), true);
		$this->mysmarty->assign("err_msg", $err_msg, true);
		$this->mysmarty->display("admin_user.html");
	}
}