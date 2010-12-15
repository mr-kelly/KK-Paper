<?php

	class Search extends KK_Controller {
		
		function index() {
			// 搜查字符串
			$q = $this->input->get('q');
			
			
			/**
			 *	如果无查询字符, 不返回数据
			 */
			if ( $q == '' ) {
				$result = array();
			} else {
				$result = $this->article_model->search_articles( $q );
			}
			
			$data = array(
				'result' => $result,
			);
			
			kk_template('search', $data);
		}
		
	}
