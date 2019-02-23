<?php
//处理修改分类的页面
include("../conn.php");
$leave_content = $_POST['leave_content'];
$art_id = $_POST['art_id'];
$id = $_POST['id'];

//sql语句
$sql = "update guestbook set leave_content='$leave_content',art_id=$art_id where id=$id";
$r = mysqli_query($conn,$sql);
if($r){
    alert('修改成功！','guestbook_list.php');
}else{
  echo "修改失败！";
}
?>