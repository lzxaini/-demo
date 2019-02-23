<?php
	//包含导入class_input.php类
	include('class_input.php');
	include('conn.php');
	/*将留言板传来的数据分别保存到word中*/
	$word = $_POST['leave_content'];
	/*定义一个变量存放警告，用于后续调用*/
	$warning = '警告内容不合法！';
	/*处理输出留言板输入的内容*/
	echo('留言内容：'.$word);

	$input = new input();

/*调用函数，检测留言内容是否为空*/
	$is = $input->post( $word );
		if ($is == false) {
			/*输出一个script弹窗警告*/
			echo "<script> alert('{$warning}') </script>";
			/*终止程序，并输出一段话*/
				die('<br />'.'警告：'.'警告留言内容不能为空！');
		}
	/*数据写入数据库*/
//编写的sql语句
	$sql = "INSERT INTO guestbook(leave_content)VALUES('{$word}')";
	$rws = $conn->query( $sql );
	//判断是否插入成功
	if ($rws == true) {
		echo "<script> alert('插入成功') </script>";
	}else{
		echo "<script> alert('插入失败') </script>";
	}
// var_dump($name,$word);
	header("location: register_index.php")
  ?>