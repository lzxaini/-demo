<!DOCTYPE html>
<html>
<head>
	<title>博客登录页面</title>
	<style type="text/css">
		html,body{margin: 0;padding: 0px;background:#26272b;}
		form{width: 500px;height: 350px;margin: 150px auto 0px;background:#f1f2f9;text-align: center;border-radius: 8px;}
		form h2{margin:0px 0px 50px 0px;height: 50px;font:28px/50px 楷体;background:#dfe0e7;border-bottom: 2px solid #26272b;border-radius: 8px 8px 0px 0px;}
		.input1{font:18px/36px 楷体;width: 240px;}
		.btn1{font:18px/36px 楷体;width: 160px;border:0px;background:#30ae3c;border-radius: 4px;color: #fff;margin-top: 25px;}
		.btn2{font:18px/36px 楷体;width: 160px;border:0px;background:#ccce;border-radius: 4px;color: #fff;margin-top: 2px;}
	</style>
</head>
<body>
	<form action="index_logoin_check.php" method="post">
		<h2>博客论坛登录</h2>
		<p>登录名：<input type="text" name="username" class="input1" autofocus="autofocus" placeholder="请输入博客账号"></p>
		<p>密&emsp;码：<input type="password" name="password" class="input1"></p>
		<p><input type="submit" value="立即登录" class="btn1"></p>
		<a href="../index.php"><input type="button" value="回首页" class="btn2"></a>
	</form>
</body>
</html>