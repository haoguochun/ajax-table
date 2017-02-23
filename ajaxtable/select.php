<?php
	include "db.php";
	$sql="select * from stu";
	$res=$db->query($sql);
	$arr=array();
	while($row=$res->fetch_assoc()){
		$arr[]=$row;
	}
	echo json_encode($arr);
	
	
?>