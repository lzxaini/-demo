<?php
//处理修改分类的页面
include("../conn.php");
$cate_name = $_POST['cate_name'];
$order_no = $_POST['order_no'];
$id = $_POST['id'];

//sql语句
$sql = "update category set cate_name='$cate_name',order_no=$order_no where id=$id";
$r = mysqli_query($conn,$sql);
if($r){
    alert('修改成功！','cate_list.php');
}else{
  echo "修改失败！";
}
?>