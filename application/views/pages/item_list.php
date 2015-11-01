<?php
	$id= $prefix.'_id';
	$name= $prefix.'_name';
	$position= $prefix.'_position';
	foreach ($items as $row) {
		echo '<ul class="list-group item-width">
					 <li class="list-group-item text-ellipsis list-group-item-success" title='.$row->$id.'><b>条目编号: </b>'.$row->$id.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-warning" title='.$row->$name.'><b>条目名字: </b>'.$row->$name.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-success" title='.$row->$position.'><b>养生部位: </b>'.$row->$position.'</li>
					 <li class="list-group-item text-ellipsis list-group-item-warning text-center">
					 	<a class="marginLeftRight" href="/WuguBaike/index.php/admin/AdminHomePage/edit/'.$row->$id.'/'.$user_name.'/'.$list_tab_id.'/'.$prefix.'">编辑</a>
					 	<a href="/WuguBaike/index.php/admin/XiaofangData/delete/'.$row->$id.'/'.$user_name.'/'.$list_tab_id.'" class="marginLeftRight">删除</a>
					 </li>
			 </ul>';
	}
?>