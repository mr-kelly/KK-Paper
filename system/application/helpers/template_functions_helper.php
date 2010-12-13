<?php
	
	/**
	 *	获取模板 Header, Footer, Sidebar
	 */
	function get_header() {
		kk_template( KK_THEME . '/header' );
	}
	function get_footer() {
		kk_template( KK_THEME . '/footer');
	}
	
	function get_sidebar() {
		kk_template( KK_THEME . '/sidebar');
	}
	
	
	/**
	 *	文章列表 <li>
	 */
	function kk_list_articles( $cat_id=null, $limit=null) {
		$ci =& get_instance();
		$articles = $ci->article_model->get();
		
		$return = null;
		foreach ( $articles as $article ) {
			$return .= sprintf( '<li class="list_article"><a href="%s"><span class="float_right">%s</span>%s</a></li>', site_url( 'article/' . $article['id'] ), kk_dateime( $article['modified'] ,'m-d'),  $article['title'] );
		}
		
		return $return;
	}
	/**
	 *	"更多"文章的按钮链接
	 */
	function kk_btn_articles_more( $cat_id=null ) {
		$return = sprintf('<a href="%s">%s</a>', site_url('category/'.$cat_id), '更多' );
		
		return $return;
	}
	
	/**
	 *	菜单
	 */
	function kk_menu( $exclude = null ) {
		$ci =& get_instance();
		$ci->load->model('menu_model');
		$menu_items = $ci->menu_model->get();
		
		$return = null;
		$return .= '<ul id="menu">';
		foreach( $menu_items as $menu ) {
			$return .= sprintf( '<li><a href="%s">%s</a></li>', $menu['link'], $menu['text'] );
		}
		$return .= '</ul>';
		
		return $return;
	}
	
	/**
	 *	搜索框 调用Google 搜索联盟
	 */
	function kk_search_bar() {
	
	}
	
	/**
	 *	图片幻灯片~
	 */
	function kk_photos_slider() {
	
	}