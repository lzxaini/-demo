<!DOCTYPE html>
<html>
<head>
	<title>博客论坛</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1,user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/前台博客style.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">博客论坛中心&nbsp;&nbsp;</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
					<?php
						$sql = "select * from category order by order_no asc,id desc";
						$rs = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($rs)){
							echo '<li>';
							echo '<a href="article.php?cate_id='.$row['id'].'">'.$row['cate_name'].'</a>';
							echo '</li>';
						}
					?>
				</ul>
				<ul class="nav navbar-nav navbar-right">
				    <li>
				    	<a href="index_logoin.php"><span class="glyphicon glyphicon-user"></span> 登录</a>
				    </li>
				    <li>
				    	<a href="register.php"><span class="glyphicon glyphicon-log-in"></span> 注册</a>
				    </li>
					<li>
					    <a href="admin/logoin.php"><span class="glyphicon glyphicon-piggy-bank"></span> 管理员登录</a>
					</li>
				   <li>
				   	<a href="关于.php"><span class="glyphicon glyphicon-tree-deciduous"></span> 简介</a>
				   </li>
<!-- 					<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;关于</a></li> -->
				</ul>				
			</div>

		</div>
	</nav>