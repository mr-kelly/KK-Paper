<?php
	$this->load->view('admin/header');
?>
<form method="post" action="<?=site_url('admin/article/edit/' . $article['id']);?>">
	<input type="text" name="title" value="<?=$article['title'];?>" />
	<textarea><?=$article['content'];?></textarea>

</form>




<?php
	$this->load->view('admin/footer');
?>