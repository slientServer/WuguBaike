<?php 

if(isset($item)){
    echo  '<h3 class="text-center">五谷养生百科后台管理系统</h3>
          <h5>欢迎登录管理系统,'.$user_name.'！&nbsp;<a href= "/wugubaike/index.php/admin/SessionDestroy">登出</a></h5><hr>';
}

//五谷百科发布/编辑页面
$this->load->helper(array('url', 'form'));
 if(isset($item)){
    echo form_open('admin/BaojianpinData'); 
 }else{
    echo form_open('admin/BaojianpinData/add');
 }
?>

<?php
//处理edit baojianpin_id 无效
if(isset($item)){
    echo '<input type="hidden" name= "baojianpin_id" value= '.$item[0]->baojianpin_id.'>';
}
echo '<input type="hidden" id="baojianpin_list_tab_id" name= "list_tab_id" value= '.$list_tab_id.'>';
?>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">条目编号</span>
     <input type="text" class="form-control" name="baojianpin_id" placeholder= "条目编号" aria-describedby="basic-addon1" <?php if(isset($item)){ echo 'disabled= "disabled"';}?>
            title= <?php if(isset($item)){ echo $item[0]->baojianpin_id;} ?> value= <?php if(isset($item)){ echo $item[0]->baojianpin_id;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">保健品学名</span>
     <input type="text" class="form-control" name="baojianpin_name" placeholder="保健品学名" aria-describedby="basic-addon1" 
            title= <?php if(isset($item)){ echo $item[0]->baojianpin_name;} ?> value= <?php if(isset($item)){ echo $item[0]->baojianpin_name;} ?>>
    </div>
  </div>
</div>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">保健品英文名</span>
     <input type="text" class="form-control" name="baojianpin_enname" placeholder= "保健品英文名" 
     aria-describedby="basic-addon1" title= <?php if(isset($item)){ echo $item[0]->baojianpin_enname;} ?> value= <?php if(isset($item)){ echo $item[0]->baojianpin_enname;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">养生部位</span>
     <input type="text" class="form-control" name="baojianpin_position" placeholder="养生部位" aria-describedby="basic-addon1" 
            title= <?php if(isset($item)){ echo $item[0]->baojianpin_position;} ?> value= <?php if(isset($item)){ echo $item[0]->baojianpin_position;} ?>>
    </div>
  </div>
</div>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">保健品条码</span>
     <input type="text" class="form-control" name="baojianpin_tiaoma" placeholder="保健品条码" aria-describedby="basic-addon1"
            title= <?php if(isset($item)){ echo $item[0]->baojianpin_tiaoma;} ?> value= <?php if(isset($item)){ echo $item[0]->baojianpin_tiaoma;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">保健品品牌</span>
     <input type="text" class="form-control" name="baojianpin_pinpai" placeholder="保健品品牌" aria-describedby="basic-addon1" 
            title= <?php if(isset($item)){ echo $item[0]->baojianpin_pinpai;} ?> value= <?php if(isset($item)){ echo $item[0]->baojianpin_pinpai;} ?>>
    </div>
  </div>
</div>

<input type="hidden" id="current_user_name" name="user_name" value=<?php echo $user_name ?>>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">保健品功效</span>
     <textarea type="textarea" rows="4" class="form-control" name="baojianpin_value" aria-describedby="basic-addon1" 
               title= <?php if(isset($item)){ echo $item[0]->baojianpin_value;} ?>><?php if(isset($item)){ echo $item[0]->baojianpin_value;} ?></textarea>
    </div>
</div>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">保健品推荐</span>
     <textarea type="textarea" rows="4" class="form-control" name="baojianpin_buy" aria-describedby="basic-addon1"
               title= <?php if(isset($item)){ echo $item[0]->baojianpin_buy;} ?>><?php if(isset($item)){ echo $item[0]->baojianpin_buy;} ?></textarea>
    </div>
</div>

<div class='submitButton'>
  <span class="marginRight"><?php echo form_submit("mySubmit", "保存");?></span>
  <span ><button type="reset" onclick="BaojianpinBackToHomePage();">取消</button></span>
</div>

</form>
 