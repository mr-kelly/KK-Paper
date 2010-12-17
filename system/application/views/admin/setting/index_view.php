<?php
	$this->load->view('admin/header');
?>

<div id="content">
	<h2>添加用户</h2>
	
	<form action="<?=site_url('admin/setting/user_add');?>" method="post">
		<p>
			<label>用户名</label>
			<input type="text" name="username" />
		</p>
		
		<p>
			<label>邮箱</label>
			<input type="text" name="email" />
		</p>
		
		<p>
			<label>密码</label>
			<input type="password" name="password" />
		</p>
		
		<p>
			<label>角色</label>
			<select>
				<?php
					$ci =& get_instance();
					$user_roles = $ci->config->item('user_roles');
					foreach ( $user_roles as $key=>$role ):
				?>
				<option name="role" value="<?=$key;?>"><?=$role;?></option>
				<?php
					endforeach;
				?>
			</select>
		</p>
		
		<p>
			<button type="submit" class="btn">
				<span><span>新建</span></span>
			</button>
		</p>
	</form>
</div>

<?php
	$this->load->view('admin/footer');
?>