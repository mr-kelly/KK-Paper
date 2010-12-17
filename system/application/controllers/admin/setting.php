<?php

	class Setting extends KK_Controller {
		function index() {
			$data = array();
//			print_r( get_user());
			

			$this->load->view('admin/setting/index_view', $data);
		}
	}