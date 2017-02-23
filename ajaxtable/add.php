<?php
	include "db.php";
	$sql="insert into stu () values ()";
	$res=$db->query($sql);
	if($db->affected_rows>0){
		echo $db->insert_id;
	}else{
	     echo "添加失败";
    }
?>