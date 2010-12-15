<? //static_url('js/kindeditor/php/upload_json.php');?>
<form action="<?=site_url('upload');?>" method="post" enctype="multipart/form-data">
	<label for="file">Filename:</label>
	<input type="file" name="imgFile" id="file" /> 
	<br />
	<input type="submit" name="submit" value="Submit" />
</form>