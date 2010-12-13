<?php

	class Dashboard extends KK_Controller {
		
		function index() {
			$data = array();
			
			
			kk_show_view('admin/dashboard/index_view', $data);
		}
		
		
		function menu() {
			$data = array();
			kk_show_view('admin/dashboard/menu_view', $data);
		}
		
		function home() {
			$data = array();
			
			kk_show_view('admin/dashboard/home_view', $data);
			
			
			
		}
		
	}