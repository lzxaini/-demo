<?php
include("../conn.php");
/*新增分类功能处理页面*/
$admin_user = $_POST['admin_user'];
$admin_pws= $_POST['admin_pws'];

//构造SQL语句
$sql = "insert into admin(username,password) values('$admin_user',$admin_pws)";
$r = mysqli_query($conn,$sql);
if($r){
	alert('新增成功！','newreg_list.php');
}else{
	echo "人品问题，新增失败！";
	mysqli_error();
}
?>