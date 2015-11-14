<?php 

if(isset($item)){
    echo  '<h3 class="text-center">五谷养生百科后台管理系统</h3>
          <h5>欢迎登录管理系统,'.$user_name.'！&nbsp;<a href= "/wugubaike/index.php/admin/SessionDestroy">登出</a></h5><hr>';
}

//五谷百科发布/编辑页面
$this->load->helper(array('url', 'form'));
 if(isset($item)){
    echo form_open('admin/XiaofangData'); 
 }else{
    echo form_open('admin/XiaofangData/add');
 }
?>

<?php
//处理edit wugu_id 无效
if(isset($item)){
    echo '<input type="hidden" name= "xiaofang_id" value= '.$item[0]->xiaofang_id.'>';
}
echo '<input type="hidden" id="xiaofang_list_tab_id" name= "list_tab_id" value= '.$list_tab_id.'>';
?>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">小方编号</span>
     <input type="text" class="form-control" name="xiaofang_id" placeholder= "小方编号" aria-describedby="basic-addon1" <?php if(isset($item)){ echo 'disabled= "disabled"';}?>
            title= <?php if(isset($item)){ echo $item[0]->xiaofang_id;} ?> value= <?php if(isset($item)){ echo $item[0]->xiaofang_id;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">养生部位</span>
     <input type="text" class="form-control" name="xiaofang_position" placeholder="养生部位" aria-describedby="basic-addon1" 
            title= <?php if(isset($item)){ echo $item[0]->xiaofang_position;} ?> value= <?php if(isset($item)){ echo $item[0]->xiaofang_position;} ?>>
    </div>
  </div>
</div>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">小方学名</span>
     <input type="text" class="form-control" name="xiaofang_name" placeholder="小方学名" aria-describedby="basic-addon1"
            title= <?php if(isset($item)){ echo $item[0]->xiaofang_name;} ?> value= <?php if(isset($item)){ echo $item[0]->xiaofang_name;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">小方出处</span>
     <input type="text" class="form-control" name="xiaofang_from" placeholder="小方出处" aria-describedby="basic-addon1" 
            title= <?php if(isset($item)){ echo $item[0]->xiaofang_from;} ?> value= <?php if(isset($item)){ echo $item[0]->xiaofang_from;} ?>>
    </div>
  </div>
</div>

<input type="hidden" id="current_user_name" name="user_name" value=<?php echo $user_name ?>>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">小方内容</span>
     <textarea type="textarea" rows="4" class="form-control" name="xiaofang_content" aria-describedby="basic-addon1" 
               title= <?php if(isset($item)){ echo $item[0]->xiaofang_content;} ?>><?php if(isset($item)){ echo $item[0]->xiaofang_content;} ?></textarea>
    </div>
</div>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">食用方法</span>
     <textarea type="textarea" rows="4" class="form-control" name="xiaofang_method" aria-describedby="basic-addon1"
               title= <?php if(isset($item)){ echo $item[0]->xiaofang_method;} ?>><?php if(isset($item)){ echo $item[0]->xiaofang_method;} ?></textarea>
    </div>
</div>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">小方疗效</span>
     <textarea type="textarea" rows="4" class="form-control" name="xiaofang_value" aria-describedby="basic-addon1"
               title= <?php if(isset($item)){ echo $item[0]->xiaofang_value;} ?>><?php if(isset($item)){ echo $item[0]->xiaofang_value;} ?></textarea>
    </div>
</div>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">小方禁忌</span>
     <textarea type="textarea" rows="4" class="form-control" name="xiaofang_jinji" aria-describedby="basic-addon1"
               title= <?php if(isset($item)){ echo $item[0]->xiaofang_jinji;} ?>><?php if(isset($item)){ echo $item[0]->xiaofang_jinji;} ?></textarea>
    </div>
</div>

<div class='submitButton'>
  <span class="marginRight"><?php echo form_submit("mySubmit", "保存");?></span>
  <span ><button type="reset" onclick="XiaofangBackToHomePage();">取消</button></span>
</div>

</form>
 