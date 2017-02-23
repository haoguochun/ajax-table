<?php
include "db.php";
$id=$_GET["id"];
$name=$_GET["name"];
$age=$_GET["age"];
$sex=$_GET["sex"];
$sql="update stu set name='{$name}',sex='{$sex}',age='{$age}' where id=".$id;
$res=$db->query($sql);
if($db->affected_rows>0){//检查受影响的行数
   include "tishi.html";
 }  

?>