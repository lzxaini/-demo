<?php 
    header("Content-Type: text/html; charset=utf8");
    // include('判断url访问.php');
    $username=$_POST['username'];//post获取表单里的name
    $password=$_POST['password'];//post获取表单里的password
/*调用函数，检测留言内容是否为空*/
    // $is = $input->post( $name );
        if ($username == false) {
            /*输出一个script弹窗警告*/
            echo "<script> alert('警告注册内容不能为空！') </script>";
            /*终止程序，并输出一段话*/
                die('<br />'.'警告：'.'警告注册内容不能为空！');
        }
    // $is = $input->post( $password );
        if ($password == false) {
            echo "<script> alert('警告注册密码不能为空！') </script>";
                die('<br />'.'警告：'.'警告注册密码不能为空！');
        }

 

    include('./conn.php');//链接数据库
        $sql="select username from user where username='$username'"; 
        // echo $sql; 
        $query = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($query); 
        if($rows > 0){ 
        echo "<script>alert('用户名已存在');location.href='register.php';</script>"; 
            die("警告：用户名已存在！");
        }else{
        $sql="insert into user(id,username,password) values (null,'$username','$password')";
        //向数据库插入表单传来的值的sql
        // $reslut=mysqli_query($q,$con);//执行sql
        $reslut = $conn->query( $sql );
        if (!$reslut) {
        echo "<script> alert('SQL语句错误！') </script>";
        exit;
        }
        else{
        echo "<script> alert('注册成功,即将跳转登录！');</script>";//成功输出注册成功
        echo "<script>
                     setTimeout(function(){window.location.href='index_logoin.php';},333);
                </script>";
        }
        }
    mysqli_close($conn);//关闭数据库
?>