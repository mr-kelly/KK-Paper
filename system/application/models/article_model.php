<?php

	class Article_Model  extends KK_Model {
		
		/**
		 *	返回文章总数
		 */
		function articles_count() {
			$query = $this->db->get('articles');
			
			return $query->num_rows();
			
		}
		
		/**
		 *	发布文章
		 */
		function create( $data ) {
			$this->db->insert('articles' , $data + array(
				//'category_id' => 0,
				'created' => date('Y-m-d H:i:s'),
			) );
			
			return $this->db->insert_id();
			
		}
		
		/**
		 *	修改
		 */
		function update( $article_id , $data ) {
			$this->db->where( 'id', $article_id );
			
			return $this->db->update('articles', $data );
			
			
		}
		
		
		/**
		 *	获得文章
		 */
		function get( $where = array() , $limit = null, $offset = null ) {
			$this->db->order_by('modified', 'desc');
			$query = $this->db->get_where( 'articles', $where, $limit, $offset );
			
			
			$articles = $query->result_array();
			
			// 为文章数组，放入所属分类的信息  
			foreach( $articles as $key=>$article ) {
				$articles[$key]['categories'] = $this->get_cat( $article['id'] );
			}
			
			
			
			if ( $query->num_rows() == 1 ) {
				// 如果只有一篇文章，返回一篇
				
				return $articles[0];
				
			} else {
				return $articles;
			}
			
			
			
		}
		
		
		function get_articles_by_cat_id ( $cat_id, $limit=null, $offset=null ) {
			$this->db->order_by('modified', 'desc');
			$article_ids = $this->db->get_where('article_categories', array(
				'category_id' => $cat_id,
			), $limit, $offset );
			
			$article_ids = $article_ids->result_array();
			$return = array();
			foreach ( $article_ids as $article ) {
				array_push( $return, $this->get( array('id'=>$article['article_id']) ) );
			}
			
			return $return;
			
		}
		
		/**
		 *	获得指定分类的文章总数，返回数字
		 */
		function get_articles_count_by_cat_id( $cat_id ) {
			$articles = $this->db->get_where('article_categories', array(
				'category_id' => $cat_id,
			));
			
			return $articles->num_rows();
		}
		
		/**
		 *	删除文章
		 */
		function delete( $article_id ) {
			$this->db->delete('articles', array(
				'id' => $article_id,
			) );
		}
		
		
		
		/**
		 *	文章的分类设置~
		 */
		 function add_cat( $article_id, $cat_id ) {
		 	$this->db->insert('article_categories', array(
		 		'article_id' => $article_id,
		 		'category_id' => $cat_id,
		 		'created' => date('Y-m-d H:i:s'),	
		 	));
		 	
		 	return $this->db->insert_id();
		 }
		 
		 /**
		  *	获取文章的所属分类~~   
		  		×××× 放入的数组信息，!!!ID对应cat id !! 这样可以快速根据键值判断文章是否属于那个分类！
		  */
		 function get_cat( $article_id ) {
		 	$query = $this->db->get_where('article_categories', array(
		 		'article_id' => $article_id,
		 	));
		 	$cats = $query->result_array();
		 	
		 	//return $cats;
		 	
		 	$return_cats = array();
		 	
		 	
		 	$ci =& get_instance();
		 	$ci->load->model('category_model');
		 	foreach ( $cats as $key=>$cat ) {
		 		$return_cats[$cat['category_id']] = $ci->category_model->get_single( array('id'=>$cat['category_id'] ) );
		 	}
		 	
		 	
		 	return $return_cats;
		 }
		 
		 /**
		  *	清空该文章的所有分类关联
		  */
		 function clear_cat( $article_id ) {
		 	$this->db->where('article_id', $article_id);
		 	$this->db->delete('article_categories');
		 }
		
		
		
	}