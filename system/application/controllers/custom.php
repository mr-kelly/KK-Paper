<?php

	class Custom extends KK_Controller {
	
		/** 
		 *	自定义PHP页面~  
		 
		 	根据 page_name 将模板的custom文件夹里面的文件自动包含
		 
		 	已设置URI路由器， /c/***   (***代表custom模板文件)
		 */
		function custom_page( $page_name ) {
		
			kk_template('custom/' . $page_name );
		}
		
	
	}