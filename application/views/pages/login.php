
<h1 class="text-center">五谷养生百科网后台管理系统</h1>
<hr/>
<h3 class="text-center">登录</h1>

<?php echo form_open('admin/FormValidation'); ?>
<div class="input-group col-lg-3 user-input">
  <span class="input-group-addon" id="sizing-addon1">用户名</span>
  <input type="text" name="username" class="form-control" placeholder="用户名或邮箱" aria-describedby="sizing-addon1">
</div>
<div class="input-group col-lg-3 user-input">
  <span class="input-group-addon" id="sizing-addon1">密&nbsp;&nbsp;&nbsp;&nbsp;码</span>
  <input type="password" name="password" class="form-control" placeholder="密码" aria-describedby="sizing-addon1">
</div>
<div class="user-input error"> <?php if(isset($GLOBALS["errorInfo"])){echo $GLOBALS["errorInfo"];}?></div>
<div class="user-input">
	<span class="marginLeft"><?php echo form_submit("mySubmit", "提交");?></span>
	<span class="marginLeft"><?php echo form_reset("myReset", "重置");?></span>
</div>
</form>

