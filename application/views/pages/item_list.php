<?php
	foreach ($items as $row) {
		echo '<ul class="list-group item-width">
					 <li class="list-group-item list-group-item-success"><b>条目编号: </b>'.$row->baike_id.'</li>
					 <li class="list-group-item list-group-item-warning"><b>条目名字: </b>'.$row->baike_name.'</li>
					 <li class="list-group-item list-group-item-success"><b>养生价值: </b>'.$row->baike_position.'</li>
					 <li class="list-group-item list-group-item-warning text-center">
					 	<a class="marginLeftRight" href="/WuguBaike/index.php/admin/AdminHomePage/edit/'.$row->baike_id.'">编辑</a>
					 	<a href="#" class="marginLeftRight">删除</a>
					 </li>
			 </ul>';
	}
?>