<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>无ajax增删改查     学生表</title>
</head>
<style>
	* {
		padding: 0px;
		margin: 0px;
		list-style: none;
	}
	table{
		width: 800px;
		height: auto;
		margin: 0px auto;
		border: 1px solid pink;
		table-layout: fixed;
		border-collapse: collapse;
	}
	.head{
		width: 800px;
		height: 30px;
		margin: 0px auto;
		margin-top: 20px;
		text-align: center;
	}
	tr,td {
		    /*font-size: 16px;*/
			text-align: center;
			line-height: 30px;
			border: 1px solid #000;
			cursor: pointer;
		}
	.add{
	  display: block;
      width:798px;
      border:1px solid #000;
      height:30px;
      border-top:none;
      text-align: center;
      line-height:30px;
      margin:0 auto;
      text-decoration: none;
	}
</style>
<body>
    <div class="head">学生信息表</div>
	<table cellspacing="0" cellpadding="0">
		<tr>
			<td>学号</td>
			<td>姓名</td>
			<td>年龄</td>
			<td>性别</td>
			<td>操作</td>
		</tr>
		<?php
			include "db.php";
			$sql="select * from stu";
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
			?>
		<tr>
			<td><?php echo $row["id"]?></td>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["sex"]?></td>
			<td><a href="update.php?id=<?php echo $row['id']?>">编辑</a>
				<a href="del.php?id=<?php echo $row['id']?>">删除</a>
			</td>			
		</tr>
		<?php	
		}		
		?>
		
	</table>
    <a href="addinfo.php" class="add">添加</a>

	
	
	
	
</body>

</html>