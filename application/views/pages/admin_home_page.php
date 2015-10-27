<h3 class="text-center">五谷养生百科后台管理系统</h3>
<h5>欢迎登录管理系统,<?php if(isset($user_name)){echo $user_name;} ?></h5>
<hr>
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#wugu_list" aria-controls="wugu_list" role="tab" data-toggle="tab">五谷百科列表</a></li>
    <li role="presentation"><a href="#wugu_xiaofang" aria-controls="wugu_xiaofang" role="tab" data-toggle="tab">养生小方列表</a></li>
    <li role="presentation"><a href="#wugu_baojianpin" aria-controls="wugu_baojianpin" role="tab" data-toggle="tab">养生保健品列表</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="wugu_list">
    	<?php $this->load->view('pages/item_list', array('items'=> $wugu_info));?>
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_xiaofang">
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_baojianpin">
    </div>
  </div>

</div>