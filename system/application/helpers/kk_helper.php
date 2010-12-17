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
 *	输入用户角色，获取权限数字~
 	admin - 10
 	editor - 8
 	author - 4
 	user - 2
 */
function get_role_power( $role ) {
	if ( $role == 'admin' ) {
		 return 10;
	} else if ( $role == 'editor' ) {
		return 8;
	} else if ( $role == 'author' ) {
		return 4;
	} else if ( $role == 'user' ) {
		return 2;
	}
}



/** 
 *	获取当前登录用户的ID
 */
function get_user_id() {
	//login_redirect();
	
	$ci =& get_instance();
	$ci->load->library('tank_auth');
	return $ci->tank_auth->get_user_id();
}




function get_user( $user_id = null ) {
	if ( $user_id == null ) {
		$user_id = get_user_id();
	}
	
	$ci =& get_instance();
	$ci->load->model('tank_auth/users');
	$user = $ci->users->get_user_by_id( $user_id, true );
	
	return (array)$user;
	
}


/**
 *	未登陆转到登录页!
 
 	根据角色～转接
 		admin > editor > author > user
 */
function login_redirect( $role = 'user') {

	
	if ( !is_logined() ) {
		// 未登录
		redirect('auth/login?redirect=' . uri_string());
		
	} else {
		/**
		 *	登录了，判断角色~
		 	如果$current_user_role < $role要求, 不允许～ redirect~Ω
		 */
		// 获取角色权利指数～
		// 需要的权利
		$role = get_role_power( $role );
		// 当前用户
		$current_user = get_user();
		$current_user_role = get_role_power( $current_user['profile']['role'] );
		
		if ( $current_user_role < $role ) {
			exit( 'not authority' );
		}
		
		
	}
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



