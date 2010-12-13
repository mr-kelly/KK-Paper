<?php
	// 读取自定义的配置文件
	require_once('./config.php');
	
	
	class KK_Controller extends Controller {
		
		function __construct() {
			
			parent::__construct();
			parse_str($_SERVER['QUERY_STRING'],$_GET);
		}
		
	}