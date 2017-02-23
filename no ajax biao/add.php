<?php

include "db.php";
$name=$_GET["name"];
$age=$_GET["age"];
$sex=$_GET["sex"];
$db->query("insert into stu (name,age,sex) values ('$name','$age','$sex')");
if($db->affected_rows>0){//检查受影响的行数
   include "tishi.html";
  }else{  
     echo '<script>alert("添加失败");location.href="studenttable.php"</script>';
  }

?>