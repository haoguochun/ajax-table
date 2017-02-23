<?php
	include "db.php";
	$attr=$_GET["name"];
	$num=$_GET["value"];
	$id=$_GET["id"];
	$sql="update stu set $attr='$num' where id=".$id;
	$res=$db->query($sql);
	if($db->affected_rows>0){
		echo 1;
	}else{
		echo 0;
	}
?>