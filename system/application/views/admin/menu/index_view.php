<?php
	$this->load->view('admin/header');
?>

<div id="content">
	<form method="post" action="<?=site_url('admin/menu/add');?>">
	
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
		</tr>
		<?php foreach ( $menu_items as $item ): ?>
		<tr>
			<td><?=$item['id'];?></td>
			<td><?=$item['text'];?></td>
			<td><a href="<?=$item['link'];?>"><?=$item['link'];?></a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>

<div id="sidebar">
	
</div>

<?php
	$this->load->view('admin/footer');
?>