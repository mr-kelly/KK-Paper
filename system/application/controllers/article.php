<?php

	class Article extends KK_Controller {
		
		function article_lookup( $article_id ) {
			$article = $this->article_model->get_single( $article_id );
			
			$data = array(
				'article' => $article,
			);
			kk_template('article', $data);
			
		}
		
		
	}
