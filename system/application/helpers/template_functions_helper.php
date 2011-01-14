<?php
	
	
	
	/**
	 *	获得静态文档的网址URL
	 */
	function get_static( $file ) {
		return static_url( $file );
	}
	
	
	/**
	 *	获得当前主题文件夹中的文件的网址 ,  通常用于theme css~
	 */
	function get_theme_file( $file ) {
		return static_url('../templates/' . KK_THEME . '/' . $file );
	}
	
	/**
	 *	获取模板 Header, Footer, Sidebar
	 */
	function get_header() {
		kk_template( 'header' );
	}
	function get_footer() {
		kk_template( 'footer');
	}
	
	function get_sidebar() {
		kk_template('sidebar');
	}
	
	
	/**
	 *	文章列表 <li>
	 */
	function kk_list_articles( $cat_id=null, $limit=null) {
		$ci =& get_instance();
		$articles = $ci->article_model->get_articles_by_cat_id( $cat_id, $limit);
		
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
			$return .= sprintf( '<li><a href="%s">%s</a></li>', site_url($menu['link']), $menu['text'] );
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
	 *	图片幻灯片~  自动获取前5篇文章，抓取文章内容中的图片部分~
	 */
	function kk_photos_slider() {
		$return = '';
		//$ci =& get_instance();
		//$articles = $ci->article_model->get( array(), 5, null );
		
		
		//$article = $articles[3];
		
		//substr( $article['content'], '<img src=""',;
		//return $return;
		
		$return .= import_js('js/s3Slider.js');
		$return .= import_css('css/photos_slider.css');
		
		$return .= <<<EOT
   <script>
	   $(function(){
		   $('#slider').s3Slider({
			   timeOut: 3000
		   });
	   });
   </script>
   <div id="slider">
        <ul id="sliderContent">
            <li class="sliderImage">
                <a href=""><img src="/kk_paper/static/upload/img/2010/12/15/48d29a45ebab9b8dbcd978b52841031a.jpg" alt="1" /></a>
                <span class="top"><strong>Title text 1</strong><br />Content text...</span>
            </li>
            <li class="sliderImage">
                <a href=""><img src="/kk_paper/static/upload/img/2010/12/15/425ece80100e14a06a4f8a7987cd3d7f.jpg" alt="2" /></a>
                <span class="top"><strong>Title text 2</strong><br />Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...Content text...</span>
            </li>
            <li class="sliderImage">
                <img src="/kk_paper/static/upload/img/2010/12/15/67707a400e4d56a516428a31bbcb87de.jpg" alt="3" />
                <span class="bottom"><strong>Title text 3</strong><br />Content text...</span>
            </li>
            <li class="sliderImage">
                <img src="/kk_paper/static/upload/img/2010/12/15/f6dd7f94618c02de1a413f774ae53932.jpg" alt="4" />
                <span class="bottom"><strong>Title text 4</strong><br />Content text...</span>
            </li>
            <li class="sliderImage">
                <img src="/kk_paper/static/upload/img/2010/12/15/f6dd7f94618c02de1a413f774ae53932.jpg" alt="5" />
                <span class="top"><strong>Title text 5</strong><br />Content text...</span>
            </li>
            <div class="clear sliderImage"></div>
        </ul>
    </div>
EOT;

		return $return;
	}