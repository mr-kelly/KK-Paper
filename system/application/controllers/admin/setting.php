<?php

	class Setting extends KK_Controller {
		function index() {
			$data = array();
			$p = $this->tank_auth->get_user_profile(1);
			print_r( $p );
			$this->load->view('admin/setting/index_view', $data);
		}
	}