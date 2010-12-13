<?php
	$this->load->view('admin/header');
?>
	<?=$page_feedback;?>
	<div id="content">
		<form method="post" action="<?=site_url('admin/category/add');?>">
			<p>
				<label>分类名称</label>
				<input type="text" name="name" />
			</p>
			<p>
				<label>分类简介(可选)</label>
				<textarea name="description"></textarea>
			</p>

			
			
			<p>
				<button type="submit" class="btn">
					<span>
						<span>
							发布
						</span>
					</span>
				</button>
			</p>
		</form>
	</div>

<?php
	$this->load->view('admin/footer');
?>