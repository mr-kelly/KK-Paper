<?php

	class Article extends KK_Controller {
	
		function index( $cat_id = null ) {
			login_redirect();
			
			$per_page = $this->config->item('per_page');
			// 页面至少初始为1
			$page = ( $this->input->get('page') == null ) ? 1 : $this->input->get('page') ;
			
			
			// 是否根据cat_id， 分类来获取文章
			$articles = $this->article_model->get( array() , $per_page, ($page-1)*$per_page);
			
			
			$this->load->library('KK_Pagination');
			$pagination = $this->kk_pagination->create_links(array(
				'total_rows' => $this->article_model->articles_count(),
				'per_page' => $per_page,
			));
			
			$data = array(
				'articles' => $articles,
				'pagination' => $pagination,
			);
			kk_show_view('admin/article/index_view',$data);
		}
		
		
		
		function add() {
			login_redirect();
			
			$page_feedback = $this->input->get('page_feedback');
			$categories = $this->category_model->get();
			
			if ( $_SERVER["REQUEST_METHOD"] == 'POST' ) {
				
				$this->form_validation->set_rules('title','Title','trim|required|xss_clean');
				$this->form_validation->set_rules('content','Content','trim|required|xss_clean');
				$this->form_validation->set_rules('cat[]','Category','required|xss_clean');
				
				if ( !$this->form_validation->run() ) {
					$page_feedback = validation_errors();
				} else {
					// 创建文章
					$article_id = $this->article_model->create( array(
						'title' => $this->form_validation->set_value('title'),
						'content' => $this->form_validation->set_value('content'),
					));
					
					// 分类绑定,为文章添加各种分类
					$cats = $this->form_validation->set_value('cat[]');
					foreach ( $cats as $cat ) {
						$this->article_model->add_cat( $article_id, $cat['id'] );
					}
					
					// 文章添加成功后～redirect并提示
					redirect('admin/article/add?page_feedback='.'已成功发布文章！');
					$page_feedback .= 'OK';
					
				}
			}
			
			$data = array(
				'page_feedback' => $page_feedback,
				'categories' => $categories,

			);
			
			
			kk_show_view('admin/article/add_edit_view', $data);
			
			
		}
		
		/**
		 *	编辑
		 */
		function edit( $article_id ) {
			login_redirect();
			
			$page_feedback = null;
			$categories = $this->category_model->get();
			
			$articles = $this->article_model->get( array(
				'id' => $article_id,
			));
			$article =& $articles;
			
			
			if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
				$this->form_validation->set_rules('title','Title','trim|required|xss_clean');
				$this->form_validation->set_rules('content','Content','trim|required|xss_clean');
				$this->form_validation->set_rules('cat[]','Category','required|xss_clean');
				
				if( ! $this->form_validation->run() ) {
					// 表单验证失败...
					$page_feedback .= validation_errors();
				} else {
					// 数据库修改
					$this->article_model->update( $article_id , array(
						'title' => $this->form_validation->set_value('title'),
						'content' => $this->form_validation->set_value('content'),
					));
					
					
					// 分类修改,  先删除所有分类关联再重新添加吧
					$this->article_model->clear_cat( $article_id );
					$cats = $this->form_validation->set_value('cat[]');
					foreach ( $cats as $cat ) {
						$this->article_model->add_cat( $article_id, $cat['id'] );
					}
					
					$page_feedback .= '修改成功';
				}
			}
			
			
			
			$data = array(
				'page_feedback' => $page_feedback,
				'article' => $article,
				'categories' => $categories,
			);
			
			kk_show_view('admin/article/add_edit_view', $data);
		}
		
		
		function delete( $article_id ) {
			login_redirect();
			
			$data = array();
			
		}
	}