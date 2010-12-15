<?php
	
	/**
	 *	文章列表~   根据文章的分类, 最新时间, 热度 等等
	 */
	class List extends KK_Controller {
		
		function category( $cat_id ) {
			$articles = $this->article_model->get_articles_by_cat_id( $cat_id );
			
			$data = array(
				'articles' => $articles,
			);
			
			kk_template('list', $articles);
			
		}
		
	}
