<h3 class="text-center">五谷养生百科后台管理系统</h3>
<h5>欢迎登录管理系统,<?php if(isset($user_name)){echo $user_name;}?>！&nbsp;<a href= "/wugubaike/index.php/admin/SessionDestroy">登出</a></h5>
<hr>
<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="wugu_admin_tab">
    <li role="presentation" class="active"><a href="#wugu_list" aria-controls="wugu_list" role="tab" data-toggle="tab">五谷百科列表</a></li>
    <li role="presentation"><a href="#wugu_baike_fabu" aria-controls="wugu_baike_fabu" role="tab" data-toggle="tab">五谷百科发布</a></li>
    <li role="presentation"><a href="#wugu_xiaofang_list" aria-controls="wugu_xiaofang_list" role="tab" data-toggle="tab">养生小方列表</a></li>
    <li role="presentation"><a href="#wugu_xiaofang_fabu" aria-controls="wugu_xiaofang_fabu" role="tab" data-toggle="tab">养生小方发布</a></li>
    <li role="presentation"><a href="#wugu_baojianpin_list" aria-controls="wugu_baojianpin_list" role="tab" data-toggle="tab">养生保健品列表</a></li>
    <li role="presentation"><a href="#wugu_baojianpin_fabu" aria-controls="wugu_baojianpin_fabu" role="tab" data-toggle="tab">养生保健品发布</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="wugu_list">
    	<?php $this->load->view('pages/item_list', array('items'=> $wugu_info, 'user_name'=> $user_name, 'list_tab_id'=> 'wugu_list', 'prefix'=> 'baike'));?>
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_baike_fabu">
      <?php $this->load->view('pages/wugu_edit', array('user_name'=> $user_name, 'list_tab_id'=> 'wugu_list'));?>
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_xiaofang_list">
      <?php $this->load->view('pages/item_list', array('items'=> $xiaofang_info, 'user_name'=> $user_name, 'list_tab_id'=> 'wugu_xiaofang_list', 'prefix'=> 'xiaofang'));?>
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_xiaofang_fabu">
      <?php $this->load->view('pages/wugu_xiaofang_edit', array('user_name'=> $user_name, 'list_tab_id'=> 'wugu_xiaofang_list'));?>
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_baojianpin_list">
      <?php $this->load->view('pages/item_list', array('items'=> $baojianpin_info, 'user_name'=> $user_name, 'list_tab_id'=> 'wugu_baojianpin_list', 'prefix'=> 'baojianpin'));?>
    </div>
    <div role="tabpanel" class="tab-pane" id="wugu_baojianpin_fabu">
      <?php $this->load->view('pages/wugu_baojianpin_edit', array('user_name'=> $user_name, 'list_tab_id'=> 'wugu_baojianpin_list'));?>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#wugu_admin_tab a[href=#<?php echo $list_tab_id;?>]").tab("show");
      }
    )
</script>