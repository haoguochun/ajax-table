<?php
 include "db.php";
 $id=$_GET["id"];
 $db->query("delete from stu where id=".$id);
 if($db->affected_rows>0){//检查受影响的行数
// 	include "messge.php";
   include "tishi.html";
   }
   else{
     echo "<script>alert('删除成功');location.href='studenttable.php'</script>";
    }
 
 
 
 
 
 
 
 
 
 
?>