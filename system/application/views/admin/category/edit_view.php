<?php
	$this->load->view('admin/header');
?>
	<?=$page_feedback;?>
	
	
	<div id="content">
	
		<h2>编辑分类</h2>
		<form method="post" action="<?=site_url('admin/category/edit/'.$category['id']);?>">
			<p>
				<label>分类名称</label>
				<input type="text" name="name" value="<?=$category['name'];?>" />
			</p>
			<p>
				<label>分类简洁</label>
				<textarea name="description"><?=$category['description'];?></textarea>
			</p>
			<button type="submit" class="btn">
				<span><span>修改</span></span>
			</button>
			
		</form>
	</div>

<?php
	$this->load->view('admin/footer');
?>