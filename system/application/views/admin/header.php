<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<?=import_css('css/style_admin.css');?>
	
	<?=import_css('css/decorator.css');?>
	
	
	<?=import_js('js/lib.js');?>
	<?=import_js('js/lib.address.js');?>
	<?=import_js('js/lib.form.js');?>
	
	<? // Tipsy ?>
	<?=import_js('js/tipsy/jquery.tipsy.js');?>
	<?=import_css('js/tipsy/tipsy.css');?>
	
	<?=import_js('js/global.js');?>
	<title>KK新闻系统管理</title>
</head>
<body>

	
	<div id="header">
		<h2><?=KK_ADMIN_TITLE;?></h2>
		<div id="menu">
			<ul>
				<li>
					<a class="tooltip" title="返回后台管理的首页" id="btn_admin_home" href="<?=site_url('admin');?>">
						后台首页
					</a>
				</li>
				<li>
					<a class="tooltip" title="发布一篇新文章" id="btn_admin_article_add" href="<?=site_url('admin/article/add');?>">
						发布文章
					</a>
				</li>
				
				<li>
					<a id="btn_admin_article_edit" class="tooltip" title="查看并修改文章" href="<?=site_url('admin/article/');?>">
						编辑文章
					</a>
				</li>
				
				<li>
					<a class="tooltip" title="查看、添加、删除文章分类" href="<?=site_url('admin/category/');?>">
						分类
					</a>
				</li>
				
				<li>
					<a class="tooltip" title="查看、添加、删除菜单项" href="<?=site_url('admin/menu');?>">
						菜单
					</a>
				</li>
				<!--
				<li>
					<a href="">
						系统设置
					</a>
				</li>
				-->
				
				<li>
					<a class="tooltip" title="返回网站首页" target="_blank" href="<?=site_url('');?>">
						返回网站
					</a>
				</li>
				
			</ul>
		
		</div>
		
		<div id="auth_box">
			<?php if( is_logined() ): ?>
			<a href="<?=site_url('auth/logout?redirect='.uri_string() );?>">退出</a>
			<?php else: ?>
			<a href="<?=site_url('auth/login');?>">登录</a>
			<?php endif; ?>
		</div>
		
		
	</div>
	
	
	<div id="container">
		
		<? if ( isset($page_feedback) && $page_feedback != '' ): ?>
			<div id="page_feedback">
				<?=$page_feedback;?>
			</div>
		<?php endif; ?>
		
		<div id="navigator">
			
		</div>