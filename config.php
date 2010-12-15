<?php	
	// 所使用的主题模板
	define('KK_THEME', 'sample_theme');
	



	/** 
	 *	数据库连接设置
	 */
	define('KK_DB_HOST','localhost');
    define('KK_DB_NAME', 'kk_paper');
    define('KK_DB_USER', 'root');
	define('KK_DB_PWD', 'root');
	
	define('KK_DB_PREFIX', 'kk_');
	
	
	/**
	 *	是否允许用户注册
	 */
	define('KK_ALLOW_REGISTRATION', FALSE);
	
	
	
	/*
	|--------------------------------------------------------------------------
	| URI PROTOCOL
	|--------------------------------------------------------------------------
	|
	| This item determines which server global should be used to retrieve the
	| URI string.  The default setting of "AUTO" works for most servers.
	| If your links do not seem to work, try one of the other delicious flavors:
	|
	| 'AUTO'			Default - auto detects
	| 'PATH_INFO'		Uses the PATH_INFO
	| 'QUERY_STRING'	Uses the QUERY_STRING
	| 'REQUEST_URI'		Uses the REQUEST_URI
	| 'ORIG_PATH_INFO'	Uses the ORIG_PATH_INFO
	|
	*/
	define('KK_URI', 'AUTO');
	
	
	
	
	// 首页， 如果是PATH_INFO, 为空， 否则为index.php比较好
	define('KK_INDEX_PAGE', '');  