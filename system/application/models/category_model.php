<?php

	class Category_Model extends KK_Model {
		
		/**
		 *	创建分类～
		 */
		function create( $data ) {
			$this->db->insert('categories', $data + array(
				'created' => date('Y-m-d H:i:s'),
			));
			
			return $this->db->insert_id();
		}
		
		
		/**
		 *	$single 返回单条数据?
		 */
		function get( $where=null , $limit = null, $offset = null, $single = false ) {
			$query = $this->db->get_where('categories', $where );
			
			if ( $query->num_rows() == 1 && $single) {
				$cat = $query->result_array();
				$cat = $cat[0];
				return $cat;
			} else {
				return $query->result_array();
			}
			
		}
		
		/**
		 *	获取单条
		 */
		function get_single($where = null, $limit = null, $offset = null ) {
			return $this->get( $where, $limit, $offset, true );
		}
		
		/**
		 *	修改分类
		 */
		function update( $category_id, $data ) {
			$this->db->where( 'id', $category_id );
			
			
			return $this->db->update('categories', $data);
			
			
		}
		
		
		function delete( $where ) {
			$this->db->delete('categories', $where ) ;
			
			// 同时删除关联数据(article_categories)，　根据category_id
			$this->db->delete('article_categories' , array(
				'category_id' => $where['id'],
			));
		}
	}