<?php
include("../conn.php");
/*删除文章分类的处理页面*/
$id=$_GET["id"];
//SQL语句删除
$sql = "delete from category where id=$id";
$r = mysqli_query($conn,$sql);
if($r){
      alert('删除成功！','cate_list.php');
}else{
      echo "删除失败！";
      echo mysqli_error($conn);
}

?>