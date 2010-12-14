<?php
	$this->load->view('admin/header');
?>


<div id="content">
	<?php if ( isset($menu) ) :  // 即修改菜单项 ?>
	<form method="post" action="<?=site_url('admin/menu/edit/'.$menu['id']);?>">
	<?php else: // 即添加菜单项页面 ?>
	<form method="post" action="<?=site_url('admin/menu/add');?>">
	<?php endif; ?>
	
		<p>
			<label>菜单名称</label>
			<?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) :  // 提交,表单错误,失败时~?>
			<input type="text" name="text" value="<?=set_value('text');?>" />
			<?php else: // 修改页面, 读取数据库内容?>
			<input type="text" name="text" value="<?=$menu['text'];?>" />
			<?php endif; ?>
		</p>
		<p>
			<label>链接</label>
			<?php if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) :  // 提交,表单错误,失败时~?>
			<input type="text" name="link" value="<?=set_value('link');?>" />
			<?php else: // 编辑修改页面, 读取数据库的现有内容?>
			<input type="text" name="link" value="<?=$menu['link'];?>" />
			<?php endif; ?>
		</p>
		
		<p>
			<button type="submit">
				<span><span>提交</span></span>
			</button>
		</p>
	</form>
</div>

<?php
	$this->load->view('admin/footer');
?>
