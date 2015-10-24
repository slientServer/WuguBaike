<h3 class='text-center'>五谷百科后台管理系统</h3>
<hr>
<?php 
	echo form_open('admin/LoginValidation');
?>
<div class='user-input'>
	<span class= 'name-pwd'>用户名:</span>
	<input type='input' name='username' value='<?php echo set_value("username");?>' width='50' placeholder='用户名'/>
	<?php echo form_error('username', '<span class="error">', '</span>');?>
</div>
<div class='user-input'>
	<span class= 'name-pwd'>密&nbsp;&nbsp;&nbsp;&nbsp;码:</span>
	<input type='password' name='userpwd' width='50' placeholder='密码'/>
	<?php echo form_error('userpwd', '<span class="error">', '</span>');?>
</div>
<div class='user-input'>
	<span class='marginLeftRight'><?php echo form_submit('submit', '提交');?></span>
	<?php echo form_reset('reset', '重置');?>
</div>
</form>
