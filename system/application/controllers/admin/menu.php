<?php

	class Menu extends KK_Controller {
		
		function index() {
			$menu_items = $this->menu_model->get();
			$data = array(
				'menu_items' => $menu_items,
			);
			kk_show_view('admin/menu/index_view', $data );
		}
		
		/**
		 *	添加菜单项~
		 */
		function add() {
			
			$this->load->model('menu_model');
			
			$page_feedback = null;
			
			if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
				$this->form_validation->set_rules('text', 'Menu Text', 'required|trim|xss_clean');
				$this->form_validation->set_rules('link', 'Menu Link', 'required|trim|xss_clean');
				
				if ( ! $this->form_validation->run() ) {
					$page_feedback .= validation_errors();
				} else {
					
					$menu_id = $this->menu_model->add( array(
						'text' => $this->form_validation->set_value('text'),
						'link' => $this->form_validation->set_value('link'),
					));

				}
			}
			
			$data = array(
				'page_feedback' => $page_feedback,
			);
			
			kk_show_view('admin/menu/add_view', $data );
			
			
		}
	}