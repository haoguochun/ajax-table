<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title></title>
	<style>
	input{
		margin-bottom: 10px;
	}
	div{
		width: 300px;
		height: 300px;
		margin: 0 auto;
		margin-top: 100px;
	}
	</style>
</head>
<body>
	<div>
	   <form action="updateinfo.php" method="get">
	   	<?php
	   		include "db.php";
	   		$id=$_GET["id"];
	   		$sql="select * from stu where id=".$id;
	   		$res=$db->query($sql);
	   		$row=$res->fetch_assoc();
	   	?>
	   	姓名:   <input type="text" name="name" id="" value="<?php echo $row['name']?>" /><br />
	   	年龄:   <input type="text" name="age" id="" value="<?php echo $row['age']?>" /><br />
	   	性别:   男:<input type="radio" name="sex" id="" value="男" <?php if($row["sex"]=="男"){?>checked="ckecked"<?php } ?>  />
	   	                  女:<input type="radio" name="sex" id="" value="女" <?php if($row["sex"]=="女"){?>checked="ckecked"<?php } ?>  />
	   	<br />
	   	<input type="hidden" name="id" value="<?php echo $id ?>"/> <!--//隐藏域-->
	   	<input type="submit" name="" id="" value="提交" />
	   	 	
	   </form>
	</div>   
	 	   
</body>
</html>