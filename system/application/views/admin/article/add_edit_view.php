<?php
	$this->load->view('admin/header');
?>

	<?=import_js('js/kindeditor/kindeditor-min.js');?>
	<script>
		
		KE.show({
			id : 'content_editor',
			imageUploadJson : '<?=static_url("js/kindeditor/php/upload_json.php");?>',
			fileManagerJson : '<?=static_url("js/kindeditor/php/file_manager_json.php");?>',//'../../php/file_manager_json.php',
			allowFileManager : true,
			afterCreate : function(id) {
				KE.event.ctrl(document, 13, function() {
					KE.util.setData(id);
					document.forms['example'].submit();
				});
				KE.event.ctrl(KE.g[id].iframeDoc, 13, function() {
					KE.util.setData(id);
					document.forms['example'].submit();
				});
			},
			items:['fullscreen', 
'plainpaste', 'wordpaste', '|', 'justifyleft', 'justifycenter', 'justifyright',
'justifyfull', 'insertorderedlist', 'insertunorderedlist', 'indent', 'outdent', 'subscript',
'superscript', '|', 'emoticons', '-',
'fontname', 'fontsize', '|', 'textcolor', 'bgcolor', 'bold',
'italic', 'underline', 'strikethrough', 'removeformat', '|', 'image',
'flash', 'media', 'advtable', 'link', 'unlink', ]
		});
		
	</script>
	
	

	
	
<?php
	/**
	 *	本视图 添加、编辑二合一，
		判断是添加还是编辑， 根据是否传入$article变量
	 */
	 if ( isset($article) ):
		// 编辑
?>
	<form method="post" action="<?=site_url('admin/article/edit/'.$article['id']);?>">
<?php
	else:
?>
	<form method="post" action="<?=site_url('admin/article/add');?>">
<?php
	endif;
?>


	<div id="sidebar">
		<div class="sidebar_widget">
			<h2>所属分类</h2>
			
			<div class="sidebar_widget_content">
				<ul>
				<?php 
					foreach ( $categories as $cat ): 
				?>
					<li>
				<?php
						if ( isset($article) ):
																				// 根据categories ids 判断 文章是否属于那个分类
				?>
					<input type="checkbox" name="cat[]" value="<?=$cat['id'];?>" <?= ( array_key_exists($cat['id'], $article['categories'] ) ) ? 'checked="checked"' : '' ;?> />
				<?php
						else:
							// Add页面，列出所有分类
				?>
					<input type="checkbox" name="cat[]" value="<?=$cat['id'];?>" <?=set_checkbox('cat[]', $cat['id'] );?> />
				<?php
						endif;
				?>
				
					<label><?=$cat['name'];?></label>
					</li>
				<?php 
					endforeach; 
				?>
				</ul>
			</div>
			
			
		</div>
		
			
			<p>
				<button type="submit" class="btn">
					<span><span>发布</span></span>
				</button>
			</p>
		
	</div>

	<div id="content">
		<?php if ( isset( $article ) ) : ?>
		<h2>修改文章</h2>
		<?php else: ?>
		<h2>发布一篇新文章</h2>
		<?php endif; ?>
			<p>
				<label>题目</label>
				<?php
					/**
					 *	如果提交，读取用户提交的内容填充表单
					 		如果不是提交，判断是否在edit页，用已有数据填充表单
					 */
				?>
				<?php if( $_SERVER["REQUEST_METHOD"] == 'POST' ): ?>
					<input class="input_title" type="text" name="title" value="<?=set_value('title');?>" />
				<?php else: ?>
					<input class="input_title" type="text" name="title" value="<?= (isset($article) ) ? $article['title'] : '';?>" />
				<?php endif; ?>
			</p>
			<p>
				<label>正文内容</label>
				<?php if( $_SERVER["REQUEST_METHOD"] == 'POST' ): ?>
					<textarea id="content_editor" name="content" rows="20"><?=set_value('content');?></textarea>
				<?php else: ?>
					<textarea id="content_editor" name="content" rows="20"><?=(isset($article)) ? $article['content'] : '' ;?></textarea>
				<?php endif; ?>
				
			</p>
	</div>
	
	




</form>
<?php
	$this->load->view('admin/footer');
?>