<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>侧边下拉导航栏</title>
    <link rel="stylesheet" type="text/css" href="css/iconfont.css">
<style type="text/css">
    *{
        padding: 0;
        margin: 0;
    }
    @font-face {
          font-family: 'iconfont';
          src: url('iconfont.eot');
          src: url('iconfont.eot?#iefix') format('embedded-opentype'),
              url('iconfont.woff2') format('woff2'),
              url('iconfont.woff') format('woff'),
              url('iconfont.ttf') format('truetype'),
              url('iconfont.svg#iconfont') format('svg');
        }
    .iconfont {
          font-family: "iconfont" !important;
          font-size: 16px;
          font-style: normal;
          -webkit-font-smoothing: antialiased;
          -moz-osx-font-smoothing: grayscale;
        }
    html,body{
    	width: 1250px;
        height: 100%;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        margin: auto;
        /*border:2px solid red;*/
        background-color: #2b3b4a;
    }
    .wrap{
        width: 260px;
        height: 100%;
        background-color: #2b3b4a;
        text-align: center;
        float: left;
        /*border:2px solid green;*/
    }
    ul{
    	list-style-type:none;
    }
    .header{
        border-bottom: 2px solid #cfcfcf;
         background-color: #2b3b4a;
    }
    .header span{
        width: 100%;
        padding: 15px 0;
        /*background-color: #05192e;*/
        font-size: 24px;
        color: #fff;
        line-height: 65px;
        /*border:2px solid red;*/
        /*float: left;*/
    }
    .header div{
    	/*margin-left: 30px;*/
        padding: 22px 0;
        font-size: 15px;
        color: #fff;
    	/*border:2px solid red;*/
        width: 120px;height: 100%;
    	float: right;
    }
    .wrap_header{
        text-align: left;
        /*border:2px solid red;*/
        margin-left: 22px;
    }
    .wrap_header h3{
        padding: 15px 0;
        font-size: 22px;
        color: #fff;
    }
    .wrap_header p{
        padding: 10px 0;
        font-size: 15px;
        color: #fff;
    }
    .nav{
        width:250px;
        margin: 15px 5px 0;
    }
    .list{
        margin-bottom: 10px;
    }
    .list h2{
        position: relative;
        padding: 15px 0;
        background-color: #454a40;
        font-size: 16px;
        color: #fff;
        border-radius: 25px;
        transition: .5s;
    }
    .list h2.on{
        background-color: #393c4a;
    }
    .list i{
        position: absolute;
        right: 10px;
        top: 16px;
        border: 8px solid transparent;
        border-left-color: #fff;
        transform:rotate(0deg);
        transform-origin: 1px 8px;
        transition: 0.5s;
    }
    .list i.on{
        transform:rotate(90deg);
    }
    .hide{
        overflow: hidden;
        height: 0;
        transition: .5s;
    }
    .hide h5{
        padding: 10px 0;
        background-color: #282c3a;
        color:#fff;
        border-bottom: 1px solid #42495d;
    }
    .main{
    	/*border:2px solid red;*/
        width: 986px;
        height: 100%;
        text-align: center;
        float: right;
        background-image: url(images/bgimg.png);
    }
</style>
</head>
<body>
<div class="header">
    <span>您好欢迎光临</span>
    <div class="iconfont">&#xe78c;安全退出</div>
    <div class="iconfont">&#xe7ce;系统首页</div>
        </div>
        <div class="wrap">
            <div class="wrap_header">  
                <h3 class="iconfont">欢迎来到管理后台&#xeb61;</h3>
                <p class="iconfont">&#xeb68;登录名：<strong>Admin</strong><br/>身&#12288;份：<strong>超级管理员</strong></p>
            </div>
                <div class="nav">
                    <ul>
                        <li class="list">
                            <h2 class="iconfont">
                                &#xeb91;文章分类
                                <i></i>
                            </h2>
                            <div class="hide">
                               	<h5><a href="#" target="myifram">新增分类</a></h5>
                                <h5>分类列表</h5>
                            </div>
                        </li>
                        <li class="list">
                            <h2 class="iconfont">
                                &#xec88;文章管理
                                <i></i>
                            </h2>
                            <div class="hide">
                                <h5>占位</h5>
                                <h5>占位</h5>
                            </div>
                        </li>
                        <li class="list">
                            <h2 class="iconfont">
                                &#xe7e5;留言管理
                                <i></i>
                            </h2>                  
                            <div class="hide">
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                            </div>
                        </li>
                        <li class="list">
                            <h2 class="iconfont">
                                &#xeb63;管理员管理
                                <i></i>
                            </h2>
                            <div class="hide">
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                                <h5>占位</h5>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
    <div class="main">
        <div style="width: 900px;height: 400px;margin:20px 43px 0px 43px;">
            <div style="width: 900px;height: 35px;background-color: #dbdbdc;">title</div>
            <p style="width: 900px;height: 365px;background-color: white;">内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容内容</p>
        </div>
    </div>
    <script>
        (function () {
            var oList = document.querySelectorAll('.list h2'),
                oHide = document.querySelectorAll('.hide'),
                oIcon = document.querySelectorAll('.list i'),
                lastIndex = 0;
            for(var i=0;i<oList.length;i++){
                oList[i].index = i;//自定义属性
                oList[i].isClick = false;
                oList[i].initHeight = oHide[i].clientHeight;
                oHide[i].style.height = '0';
                oList[i].onclick = function () {
                    if(this.isClick){
                        oHide[this.index].style.height = '0';
                        oIcon[this.index].className = '';
                        oList[this.index].className = '';
                        oList[this.index].isClick = false; 
                    }
                    else{
                        oHide[lastIndex].style.height = '0';
                        oIcon[lastIndex].className = '';
                        oList[lastIndex].className = '';
                        oHide[this.index].style.height = '200px';
                        oIcon[this.index].className = 'on';
                        oList[this.index].className = 'on';
                        oList[lastIndex].isClick = false;
                        oList[this.index].isClick = true;
                        lastIndex = this.index;
                    }
                }
            }
        })();
    </script>
</body>
</html>