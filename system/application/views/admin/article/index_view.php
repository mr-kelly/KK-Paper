<?php
	$this->load->view('admin/header');
?>

	<div id="content">
		<h2><?=( $cat_name != '' ) ? '「'.$cat_name.'」的' : '';?>文章</h2>
		
		<div>
			<a href="<?=site_url('admin/article/add');?>">
				发布新文章
			</a>
		</div>
		
		
		<table class="table_list">
			<tr>
				<th width="8%">编号</th>
				<th width="25%">标题</th>
				<th width="30%">分类</th>
				<th width="25%">时间</th>
				<th width="12%">操作</th>
			</tr>
			
			 <?php
				 foreach( $articles as $article ):
			 ?>
			 <tr>
				<td class="center"><?=$article['id'];?></td>
				<td class="ellipsis"><?=$article['title'];?></td>
				<td>
				
					<?php
						if ( $article['categories'] != array() ):
							foreach( $article['categories'] as $cat ) : 
					?>
					<span>
						<a href="<?=site_url('admin/article/cat/' . $cat['id'] );?>">
							<?=$cat['name'];?>
						</a>
					</span> /
					<?php 
							endforeach; 
						endif;
					?>
				</td>
				<td class="center">
					<?=$article['modified'];?>
				</td>
				<td>
					<a href="<?=site_url('admin/article/edit/'.$article['id']);?>">
						编辑
					</a>
					/
					<a class="delete_btn" href="<?=site_url('admin/article/delete/'.$article['id']);?>">
						删除
					</a>
				</td>
			 </tr>
			 
			 <?php
				 endforeach;
			 ?>
		</table>
		
		<?=$pagination;?>
		
	</div>

<?php
	$this->load->view('admin/footer');
?>