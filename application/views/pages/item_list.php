<?php
	foreach ($items as $row) {
		echo '<ul class="list-group item-width">
					 <li class="list-group-item text-ellipsis list-group-item-success" title='.$row->baike_id.'><b>条目编号: </b>'.$row->baike_id.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-warning" title='.$row->baike_name.'><b>条目名字: </b>'.$row->baike_name.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-success" title='.$row->baike_position.'><b>养生价值: </b>'.$row->baike_position.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-warning text-center">
					 	<a class="marginLeftRight" href="/WuguBaike/index.php/admin/AdminHomePage/edit/'.$row->baike_id.'/'.$user_name.'">编辑</a>
					 	<a href="/WuguBaike/index.php/admin/wuguData/delete/'.$row->baike_id.'/'.$user_name.'" class="marginLeftRight">删除</a>
					 </li>
			 </ul>';
	}
?>