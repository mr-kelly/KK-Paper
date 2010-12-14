<?php

	class Home extends KK_Controller {
		
		function index() {
			$data = array();
			kk_template( 'index', $data ); //注意一斜
		}
		
		
	}