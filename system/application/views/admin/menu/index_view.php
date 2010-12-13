<?php
	$this->load->view('admin/header');
?>

<div id="content">
	<form method="post" action="<?=site_url('admin/menu/add');?>">
	
		<p>
			<label>菜单名称</label>
			<input type="text" name="text" />
		</p>
		<p>
			<label>链接</label>
			<input type="text" name="link" />
		</p>
		
		<p>
			<button>
				<span><span>
					添加
				</span></span>
			</button>
		</p>
	</form>
	
</div>

<div id="sidebar">
	
</div>

<?php
	$this->load->view('admin/footer');
?>