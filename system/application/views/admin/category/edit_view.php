<?php
	$this->load->view('admin/header');
?>
	<?=$page_feedback;?>
	
	
	<div id="content">
		<form method="post" action="<?=site_url('admin/category/edit/'.$category['id']);?>">
			<input type="text" name="name" value="<?=$category['name'];?>" />
			
			
			<button type="submit">
				<span><span>修改</span></span>
			</button>
			
		</form>
	</div>

<?php
	$this->load->view('admin/footer');
?>