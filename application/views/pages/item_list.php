<?php
	$id= $prefix.'_id';
	$name= $prefix.'_name';
	$position= $prefix.'_position';
	foreach ($items as $row) {
		echo '<ul class="list-group item-width">
					 <li class="list-group-item text-ellipsis list-group-item-success" title='.$row->$id.'><b>条目编号: </b>'.$row->$id.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-warning" title='.$row->$name.'><b>条目名字: </b>'.$row->$name.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-success" title='.$row->$position.'><b>养生价值: </b>'.$row->$position.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-warning text-center">
					 	<a class="marginLeftRight" href="/WuguBaike/index.php/admin/AdminHomePage/edit/'.$row->$id.'/'.$user_name.'">编辑</a>
					 	<a href="/WuguBaike/index.php/admin/wuguData/delete/'.$row->$id.'/'.$user_name.'" class="marginLeftRight">删除</a>
					 </li>
			 </ul>';
	}
?>