<h3 class='text-center'>五谷百科条目编辑页面</h3>
<hr>
<?php 
//五谷百科发布/编辑页面

echo form_open('admin/WuguData'); 
?>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">五谷编号</span>
     <input type="text" class="form-control" name="wugu_id" placeholder="五谷编号" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_id;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">养生定位</span>
     <input type="text" class="form-control" name="wugu_position" placeholder="养生器官" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_position;} ?>>
    </div>
  </div>
</div>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">五谷学名</span>
     <input type="text" class="form-control" name="wugu_name" placeholder="五谷学名" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_name;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">五谷别名</span>
     <input type="text" class="form-control" name="wugu_alias" placeholder="五谷别名" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_alias;} ?>>
    </div>
  </div>
</div>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">优质产地</span>
     <input type="text" class="form-control" name="wugu_location" placeholder="优质产地" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_location;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">食用方法</span>
     <input type="text" class="form-control" name="wugu_method" placeholder="食用方法" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_method;} ?>>
    </div>
  </div>
</div>

<div class="row marginTBLR">
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">更多信息</span>
     <input type="url" class="form-control" name="wugu_link" placeholder="url" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_link;} ?>>
    </div>
  </div>
  <div class="col-lg-6">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">百科图像</span>
     <input type="input" class="form-control"  name="wugu_img" placeholder="图像" aria-describedby="basic-addon1" value= <?php if(isset($item)){ echo $item[0]->baike_img;} ?>>
    </div>
  </div>
</div>

 <input type="hidden" id="img_path" name="img_path">

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">养生价值</span>
     <textarea type="textarea" rows="4" class="form-control" name="wugu_value" aria-describedby="basic-addon1"><?php if(isset($item)){ echo $item[0]->baike_value;} ?></textarea>
    </div>
</div>

<div class="col-lg-12 marginTBLR">
    <div class="input-group">
     <span class="input-group-addon" id="basic-addon1">部分相关养生处方</span>
     <textarea type="textarea" rows="4" class="form-control" name="wugu_prescription" aria-describedby="basic-addon1"><?php if(isset($item)){ echo $item[0]->baike_prescription;} ?></textarea>
    </div>
</div>

<div class='submitButton'>
  <span class="marginRight"><?php echo form_submit("mySubmit", "保存");?></span>
  <span><?php echo form_reset("myReset", "重置");?></span>
</div>

</form>
