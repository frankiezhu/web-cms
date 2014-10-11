<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Page {

	public function __construct($params)		
	{
		$params['selected_page'] =  2;
		$params['total_items'] = $total->num_rows;
		$params['items_per_page'] = 10;
		$params['url'] = 'index.php?page=%s';
	}
	
	public function create_links($params)		
	{
		$cur_page = $params['cur_page'];
		$total_rows = $params['total_rows'];
		$per_page = $params['per_page'];
		$num_links = $params['num_links'];
		$num_pages = ceil($total_rows / $per_page);
		$out = '';
		if ($num_pages <= 1)
		{
			return '<li class="disabled"><a href="#">&laquo;</a></li>
					<li class="active"><a href="#">1</a></li>
					<li class="disabled"><a href="#">&laquo;</a></li>
					';
		}

	}
}
