<?php
	$this->load->view('admin/header');
?>


<div id="content">
	<h2>菜单项设置</h2>
	
	<a href="#" id="btn_menu_add">新建菜单项</a>
	
	<div id="div_menu_add" class="hidden">
		<form class="tooltip" method="post" action="<?=site_url('admin/menu');?>">
		
			<p>
				<label>菜单名称</label>
				<input type="text" name="text" />

				<label>链接</label>
				<input type="text" name="link" />
				
				<label>顺序</label>
				<input type="text" name="menu_order" title="数字越大，菜单排得越前" value="0" />
				
				<button class="btn">
					<span><span>添加</span></span>
				</button>
			</p>
			
		</form>
	</div>
	
	<table class="table_list">
		<tr>
			<th>编号</th>
			<th>菜单文字</th>
			<th>链接</th>
			<th>操作</th>
		</tr>
		<?php foreach ( $menu_items as $item ): ?>
		<tr>
			<td><?=$item['id'];?></td>
			<td><?=$item['text'];?></td>
			<td><a href="<?=$item['link'];?>"><?=$item['link'];?></a></td>
			<td>
				<a href="<?=site_url('admin/menu/edit/'.$item['id']);?>">
					编辑
				</a>
				<a class="delete_btn" href="<?=site_url('admin/menu/delete/'.$item['id']);?>">
					删除
				</a>			
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<div id="sidebar">
	
</div>

<?php
	$this->load->view('admin/footer');
?>
