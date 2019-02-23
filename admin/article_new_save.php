<?php
include("../conn.php");
/*新增分类功能处理页面*/
$title = $_POST['title'];
$cate_id = $_POST['cate_id'];
$author = $_POST['author'];
$content = $_POST['content'];
$img = $_FILES['img'];

if($img['name']){
	//开始上传
	$ext = strrchr($img['name'],'.');//获取扩展名
	$filename = date('YmdHis').rand(100,999).$ext;//生成文件名
	//判断是否上传
	$exts=['.jpg','.png','.gif','.txt','.doc'];
	if (!in_array($ext, $exts)) {
			echo "文件类型无法上传";exit;
	}
	move_uploaded_file($img['tmp_name'],'../upfiles/'.$filename);
}else{
	$filename='';
}

//构造SQL语句
$sql = "insert into article(title,cate_id,author,content,img) values('$title',$cate_id,'$author','$content','$filename')";
$r = mysqli_query($conn,$sql);
if($r){
	alert('发表成功！','article_list.php');
}else{
	echo "人品问题，发表失败！";
	mysqli_error();
}
?>