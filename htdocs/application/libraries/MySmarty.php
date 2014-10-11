<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// load Smarty library
$path = pathinfo(__FILE__, PATHINFO_DIRNAME);
define('SMARTY_DIR', $path.'/smarty/');
define('SMARTY_WORK_DIR', $path.'/../../web/smarty/');
require_once(SMARTY_DIR.'Smarty.class.php');

// The setup.php file is a good place to load
// required application library files, and you
// can do that right here. An example:
// require(’guestbook/guestbook.lib.php’);

class MySmarty extends Smarty{

	public function __construct()		
	{
		parent::__construct();
		$this->template_dir =  SMARTY_WORK_DIR.'../';
		$this->compile_dir = SMARTY_WORK_DIR.'templates_c/';
		$this->config_dir = SMARTY_WORK_DIR.'configs/';
		$this->cache_dir = SMARTY_WORK_DIR.'cache/';
		
		$this->debugging = false;
		$this->cache_lifetime=120;
		$this->caching = true;
			
	}
	

	/**
	 * An encapsulation of display method in smarty class
	 *
	 * @access	public
	 * @param	string
	 * @param   mixed
	 * @return	void
	 */
	public function view($template_file, $assigns = array())
	{
		if (is_array($assigns) && !empty($assigns))
		{
			foreach ($assigns as $key => $value)
				$this->assign($key, $value);
		}
		try{

			$this->display($template_file);
		}catch (Exception $e) {
   			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}
	
	}

}


