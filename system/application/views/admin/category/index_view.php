<?php
	$this->load->view('admin/header');
?>
	<div id="content">
	
		<h2>分类列表</h2>
		<p>
			<a href="<?=site_url('admin/category/add');?>" id="btn_category_add">
				添加新的分类
			</a>
		</p>
		
		<div id="div_category_add" class="hidden">
			<form method="post" action="<?=site_url('admin/category');?>">
				<p>
					<label>分类名称</label>
					<input type="text" name="name" />

					<label>分类简介(可选)</label>
					<input type="text" name="description" />

					<button type="submit" class="btn">
						<span><span>发布</span></span>
					</button>
				</p>
			</form>
		</div>
		
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