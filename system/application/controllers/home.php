<?php

	class Home extends KK_Controller {
		
		function index() {
			$data = array();
			kk_template( KK_THEME . '/index', $data ); //注意一斜
		}
		
		
	}