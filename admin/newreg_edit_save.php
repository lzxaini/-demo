<?php
//处理修改分类的页面
include("../conn.php");
$admin_user = $_POST['admin_user'];
$admin_flag = $_POST['admin_flag'];
$id = $_POST['id'];

//sql语句
$sql = "update admin set admin_user='$admin_user',admin_flag='$admin_flag' where id=$id";
$r = mysqli_query($conn,$sql);
if($r){
    alert('修改成功！','newreg_list.php');
}else{
  echo "修改失败！";
}
?>