<?php
	$this->load->view('admin/header');
?>

<div id="content">
	<h2>菜单项设置</h2>
	<form method="post" action="<?=site_url('admin/menu');?>">
	
		<p>
			<label>菜单名称</label>
			<input type="text" name="text" />
		</p>
		<p>
			<label>链接</label>
			<input type="text" name="link" />
		</p>
		
		<p>
			<button>
				<span><span>
					添加
				</span></span>
			</button>
		</p>
		
	</form>
	
	
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
