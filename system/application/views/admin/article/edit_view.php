<?php
	$this->load->view('admin/header');
?>
<form method="post" action="<?=site_url('admin/article/edit/' . $article['id']);?>">
	<input type="text" name="title" value="<?=$article['title'];?>" />
	<textarea><?=$article['content'];?></textarea>
	
	<button class="btn" type="submit">
		<span><span>修改</span></span>
	</button>
	
</form>




<?php
	$this->load->view('admin/footer');
?>