<?php

	class Menu_Model extends KK_Model {
	
		function add( $data ) {
			
			$this->db->insert( 'menu', $data + array(
				'created' => date('Y-m-d H:i:s'),
			));
			
			return $this->db->insert_id();
		}
		
		
		function update( $menu_id, $data ) {
			
			$this->db->where('id', $menu_id);
			return $this->db->update('menu', $data);
			
			
		}
		
		
		/**
		 *	获取菜单项
		 */
		function get( $where=null , $limit = null, $offset = null, $single = false ) {
			//$query = $this->db->get('menu');
			//return $query->result_array();
			
			$this->db->order_by('menu_order','asc');
			$query = $this->db->get_where('menu', $where );
			
			if ( $query->num_rows() == 1 && $single) {
				$menu = $query->result_array();
				$menu = $menu[0];
				return $menu;
			} else {
				return $query->result_array();
			}
			
		}
		
		function get_single( $menu_id ) {
			return $this->get( array('id'=>$menu_id), null, null, true );
		}
		
		/**
		 *	删除menu~
		 */
		function delete( $menu_id ) {
			$this->db->where('id', $menu_id);
			$this->db->delete('menu');
		}
		
		
	}
