<?php

	class Category extends KK_Controller {
		
		function index() {
			login_redirect();
			
			$data = array(
				'categories' => $this->category_model->get($where=null, $single=false),
			);
			kk_show_view('admin/category/index_view', $data);
		}
		
		function add() {
			login_redirect();
			
			$page_feedback = null;
			
			if ( $_SERVER["REQUEST_METHOD"] == 'POST' ) {
				$this->form_validation->set_rules('name','Name', 'required|xss_clean|');
				$this->form_validation->set_rules('parent_id','parent_id', 'xss_clean');
				$this->form_validation->set_rules('description','Name', 'xss_clean');
				
				if ( !$this->form_validation->run() ) {
					// 表单验证失败的话...
					$page_feedback .= validation_errors();
				} else {
					$this->category_model->create( array(
						'name' => $this->form_validation->set_value('name'),
						'parent_id' => $this->form_validation->set_value('parent_id'),
						'description' => $this->form_validation->set_value('description'),
					));
					$page_feedback = 'OK';
				}
			}
			
			$data = array(
				'page_feedback' => $page_feedback,
			);
			
			kk_show_view('admin/category/add_view', $data );
		}
		
		
		function edit( $category_id ) {
			
			login_redirect();
			
			$page_feedback = null;
			
			if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {

				// 修改
				$this->form_validation->set_rules('name','Name', 'required|xss_clean');
				$this->form_validation->set_rules('parent_id','parent_id', 'xss_clean');
				$this->form_validation->set_rules('description','Name', 'xss_clean');
				
				if ( !$this->form_validation->run() ) {
					$page_feedback .= validation_errors();
				} else {
					$this->category_model->update( $category_id, array(
						'name'=> $this->form_validation->set_value('name'),
						'description' => $this->form_validation->set_value('description'),
						'parent_id' => $this->form_validation->set_value('parent_id'),
					));
					$page_feedback .= 'ok了';
				}
			}
			
			$data = array(
				'page_feedback' => $page_feedback,
				'category' => $this->category_model->get_single(array( 'id'=> $category_id )),
			);
			
			kk_show_view('admin/category/edit_view', $data);
		}
		
		
		function delete( $category_id ) {
			
			login_redirect();
			
			$this->category_model->delete( array(
				'id' => $category_id,
			));
			
			// 回到编辑分类页面
			redirect('admin/category');
		}
	}