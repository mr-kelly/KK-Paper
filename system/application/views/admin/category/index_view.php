<?php
	$this->load->view('admin/header');
?>
<script>

</script>
	<div id="content">
		<table class="table_list">
		
		
			<tr>
				<th>分类编号</th>
				<th>分类名称</th>
				<th>分类介绍</th>
				<th>操作</th>
			</tr>
			<?php
				foreach( $categories as $cat ):
			?>
			<tr>
				<td><?=$cat['id'];?></td>
				<td><?=$cat['name'];?></td>
				<td><?=$cat['description'];?></td>
				<td>
					<a href="<?=site_url('admin/category/edit/'.$cat['id']);?>">
						编辑
					</a>
					<a class="delete_btn" href="<?=site_url('admin/category/delete/'.$cat['id']);?>">
						删除
					</a>
				</td>
			</tr>
			<?php
				endforeach;
			?>
			
			
		</table>
	</div>
	
	
	
	
<?php
	$this->load->view('admin/footer');
?>