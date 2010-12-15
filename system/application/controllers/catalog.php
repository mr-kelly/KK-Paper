<?php
	
	/**
	 *	文章列表~   根据文章的分类, 最新时间, 热度 等等
	 */
	 
	class catalog extends KK_Controller {
		function index() {
			echo 'home';
		}
		function cat( $cat_id ) {
			$articles = $this->article_model->get_articles_by_cat_id( $cat_id );
			
			$data = array(
				'articles' => $articles,
			);
			
			kk_template('catalog', $data);
			
		}
		
	}
