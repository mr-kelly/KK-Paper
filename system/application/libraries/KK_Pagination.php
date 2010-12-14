<?php

	/**
	 *	创建分页的pagination
	 */
	class KK_Pagination {
		
		
		function create_links( $option = array() ) {
			
			$option = $option + array( 
								'get' => 'page',
								'total_rows' => 1000,
								'per_page' => 10,
									);
			
			$pages = ceil( $option['total_rows'] / $option['per_page'] );
			$ci =& get_instance();
			$current_page = $ci->input->get( $option['get'] );
			
			$return = '<div class="pagination">';
			
			
			// 如果当前页不是在第一页，那么提供“上一页”链接
			if ( $current_page != 1 ) {
				$return .= sprintf( '<a href="?%s=%s">上一页</a>', $option['get'], $current_page-1 );
			}
			foreach ( range(1, $pages) as $page ) {

				
				// 当前页面的页面按钮链接，不可选
				if ( $current_page == $page ) {
					$return .= sprintf('<span>%s</span>&nbsp;', $page);
				} else {
					$return .= sprintf('<a href="?%s=%s">%s</a>&nbsp;', $option['get'], $page, $page); //'<a href="?page=' . $page .  '">' . $page . '</a>&nbsp;&nbsp;';
				}
				
				

			}
			
			// 如果当前页不是到了最后一页，那么提供“下一页”链接
			if ( $page != $current_page ) {
				$return .= sprintf( '<a href="?%s=%s">下一页</a>', $option['get'], $current_page+1 );
			}

			$return .= '</div>';
			
			return $return;
		}
	
	}