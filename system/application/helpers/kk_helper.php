<?php
function import_css( $file ) {
	echo sprintf('<link rel="stylesheet" href="%s%s" type="text/css" media="all" />' ,static_url(), $file);
}

function import_js( $file ) {
	echo sprintf('<script type="text/javascript" src="%s%s"></script>' ,static_url(), $file);
}



/** 
 *	获取静态文件的网址
 */
function static_url( $file = '' ) {
	$ci =& get_instance();
	$static_url = $ci->config->item('static_url') . $file;
	
	return $static_url;
}


function template_url( $file = '') {
	$ci =& get_instance();
	$template_url = $ci->config->item('base_url') . 'templates/' . KK_THEME . '/' . $file;
	
	return $template_url;
	
}

// 返回1 或 false
function is_logined() {
	$ci =& get_instance();
	return $ci->tank_auth->is_logged_in();
}

/**
 *	未登陆转到登录页!
 */
function login_redirect() {
	if ( !is_logined() ) {
		// 未登录
		redirect('auth/login?redirect=' . uri_string());
	}
}



/** 
 *	获取当前登录用户的ID
 */
function get_user_id() {
	login_redirect();
	$ci =& get_instance();
	$ci->load->library('tank_auth');
	return $ci->tank_auth->get_user_id();
}




function get_user( $user_id = null ) {
	
}

/**
 *	KK输出视图函数，压缩了HTML
 */
function kk_show_view( $view, $data ) {
	$ci =& get_instance();
	$ci->load->plugin('compress_html');
	//$ci->load->plugin('spaceless');
	
	$html = $ci->load->view($view, $data, true);

	// 输出压缩过的html
	echo compress_html( $html );
	//echo $html;
	
	exit();
}

/**
 *	前台模板~
 	* $data 可传入数组
 	
 	* extract函数将数组变换成全局变量
 */
function kk_template( $file , $data = array() ) {
	$ci =& get_instance();
	$ci->load->vars($data);
	echo $ci->load->file('./templates/' . KK_THEME . '/' .$file.'.php', true);
	
}

/**
 *	格式化时间， 可选取年月日
 */
function kk_dateime( $str_time, $format='Y-h-d' ) {
	$timestamp = strtotime($str_time);
	
	return date($format, $timestamp);
}



