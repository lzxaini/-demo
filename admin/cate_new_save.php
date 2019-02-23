<?php
include("../conn.php");
/*新增分类功能处理页面*/
$cate_name = $_POST['cate_name'];
$order_no = $_POST['order_no'];

//构造SQL语句
$sql = "insert into category(cate_name,order_no) values('$cate_name',$order_no)";
$r = mysqli_query($conn,$sql);
if($r){
	alert('新增成功！','cate_list.php');
}else{
	echo "人品问题，新增失败！";
	mysqli_error();
}
?>