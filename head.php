<?php
//获取判断用户是否登录
    session_start();
    if (!isset($_SESSION['frontuserid'])) {
        alert("登录超时，请重新登陆","index_logoin.php");
    }
?>
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
				<a href="register_index.php" class="navbar-brand">博客论坛中心&nbsp;&nbsp;</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="register_index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;首页</a></li>
					<?php
						$sql = "select * from category order by order_no asc,id desc";
						$rs = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($rs)){
							echo '<li>';
							echo '<a href="article.php?cate_id='.$row['id'].'">'.$row['cate_name'].'</a>';
							echo '</li>';
						}
					?>
					<li>
						<form class="navbar-form navbar-left" role="search" action="search.php" method="get">
							<div class="form-group">
								<input type="text" class="form-control" name="search" width: 115px;" placeholder="搜索查询">
							</div>
							<button type="submit" class="btn btn-default" name="search-btn">搜索</button>
						</form>
						</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<span class="glyphicon glyphicon-user"></span>
							<?php echo $_SESSION['username'];?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index_logout.php">安全退出</a></li>
							<li><a href="#">个人中心</a></li>
							<li><a href="index_logoin.php">切换账号</a></li>
						</ul>
					</li>
				    <li>
				    	<a href="关于.php"><span class="glyphicon glyphicon-tree-deciduous"></span> 简介</a>
				    </li>
<!-- 					<li><a href="#"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;关于</a></li> -->
				</ul>				
			</div>

		</div>
	</nav>