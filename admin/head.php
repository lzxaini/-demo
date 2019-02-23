<?php
//获取判断用户是否登录
    session_start();
    if (!isset($_SESSION['backuserid'])) {
        alert("登录超时，请重新登陆","logoin.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>侧边下拉导航栏</title>
    <link rel="stylesheet" type="text/css" href="css/iconfont.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div class="header">
    <span>您好尊敬的超级管理员！</span>
    <div class="iconfont"><a href="logout.php">&#xe78c;安全退出</a></div>
    <div class="iconfont"><a href="index.php">&#xe7ce;系统首页</a></div>
    <div class="iconfont"><a href="../index.php">&#xe7ce;前台主页</a></div>
        </div>
        <div class="wrap">
            <div class="wrap_header">  
                <h3 class="iconfont">欢迎来到管理后台&#xeb61;</h3>
                <p class="iconfont">
                    &#xeb63;登录名：
                    <strong>
                        <?php echo $_SESSION['username'];?>
                    </strong><br/>
                    &#xeb68;身&#12288;份：
                    <strong>
                        <?php echo $_SESSION['flag'];?>
                    </strong>
                </p>
            </div>
                <div class="nav">
                    <ul>
                        <li class="list">
                            <h2>
                                <span class="iconfont">&#xeb91;</span>
                                <span class="character" ">文章分类</span>
                                <i></i>
                            </h2>
                            <div class="hide">
                                <h5><a href="cate_new.php" target="myifram">新增分类</a></h5>
                                <h5><a href="cate_list.php" target="myifram">分类列表</a></h5>
                            </div>
                        </li>
                        <li class="list">
                            <h2>
                                <span class="iconfont">&#xec88;
                                </span><span class="character" ">文章管理</span> 
                                <i></i>
                            </h2>
                            <div class="hide">
                                <h5><a href="article_new.php">发布文章</a></h5>
                                <h5><a href="article_list.php">文章列表</a></h5>
                            </div>
                        </li>
                        <li class="list">
                            <h2>
                                <span class="iconfont">&#xe7e5;</span>
                                <span class="character">留言管理</span>
                                <i></i>
                            </h2>                  
                            <div class="hide">
                                <h5><a href="guestbook_list.php">留言列表</a></h5>
                            </div>
                        </li>
                        <li class="list">
                            <h2>
                                <span class="iconfont">&#xeb8a;</span>
                                <span class="character">管理员管理</span>
                                <i></i>
                            </h2>
                            <div class="hide">
                                <h5><a href="newreg_new.php">新增管理员</a></h5>
                                <h5><a href="newreg_list.php">管理员列表</a></h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>