<?php
include("./conn.php");
include("./head.php");
$id = $_GET['id'];
$rs = mysqli_query($conn,"select * from article where id=$id");
$row = mysqli_fetch_assoc($rs);

$sql_views = "update article set views=views+1 where id=$id";
mysqli_query($conn,$sql_views);

//编写的sql语句;用于查询并且倒序
$sql = "SELECT * FROM msg ORDER BY id DESC";	
$mysqli_result = $conn->query( $sql );

//判断SQL语句是否错误！
if ($mysqli_result === false) {
	echo "<script> alert('SQL语句错误！') </script>";
	exit;
	}
$rwws = [];
while ($rws = $mysqli_result->fetch_array( MYSQLI_ASSOC )) {
	$rwws[] = $rws;
}
?>
	<div id="myCarousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active" style="background-color: #43ad45;"><img src="images/2.png" alt="轮播图2"></div>
			<div class="item" style="background-color: red;"><img src="images/3.png" alt="轮播图3"></div>
			<div class="item" style="background-color: green;"><img src="images/4.png" alt="轮播图4"></div>
		</div>
			<a href="#myCarousel" data-slide="prev" class="carousel-control left">
				<span class="glyphicon glyphicon-chevron-left"></span></a>
			<a href="#myCarousel" data-slide="next" class="carousel-control right">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
	</div>

<div id="information">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="container-fluid" style="padding: 0;">

					<div class="row info-content">
						<div class="col-md-7 col-sm-7 col-xs-7">
							<div>
								<h4>您当前位置：
									<a href="register_index.php">首页></a>
									<span>
										<?php
											echo mb_substr($row['title'], 0,15,'utf-8');
										?>		
									</span>
								</h4>
							</div>							
						</div>
					</div>
					<div class="row info-content center">
						<div class="center">
							<div class="center">
								<h3 style="text-align: center;"><?php echo $row['title'];?></h3>
								<h5 style="text-align: center;">
									发布时间：<?php echo $row['intime'];?>&nbsp;|
									来源：<?php echo $row['author'];?>&nbsp;|
									访问人数：<?php echo $row['views'];?>
								</h5>
								<div>
									<p style="font-size: 16px;text-indent: 35px;padding:10px 0;margin: 0 7px 0 7px;"><?php echo $row['content'];?>
										<p style="border-top: 1px solid #ccc;text-align: center;font-size: 14px;color: #666;">本文完end...<br/>
											著作权&copy;：<?php echo $row['author'];?><br/>
											免责声明：一切解释均为：<?php echo $row['author'];?>
										</p>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 info-right hidden-xs hidden-sm">
				<blockquote>
					<h2>热门留言</h2>
				</blockquote>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-7 col-sm-7 col-xs-7">
							<form action="leave_save.php" method="post">
							<h4>用户名：<?php echo $_SESSION['username'];?></h4>
							<p>
								<textarea placeholder="发表留言" name="leave_content"></textarea>
								<button class="btn">发表留言</button>
							</p>
							</form>
						</div>
					</div>
					<div class="row">
						<?php 
							foreach ($rwws as $rws) {
						?>
						<div style=" border-radius: 20px;border: 1px solid #ccc;width: 100%;" class="col-md-7 col-sm-7 col-xs-7">
							<h4 style="background-color: #F5F5F5;">
								<?php echo mb_substr($rws['leave_content'], 0,15,'utf-8') ?>
							</h4>
							<p style="text-align: right;">
								<?php
								 echo "留言人：";
								 echo $_SESSION['username'];
								 echo "<br/>";
								 echo date( "Y年m月d日 H:i",strtotime($rws['ur_time']));
								 ?>
							</p>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-4 info-right hidden-xs hidden-sm">
				<blockquote>
					<h2>其他资讯</h2>
				</blockquote>
				<?php
					$sql = "select * from article order by intime desc limit 6";
					$rs = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($rs)){
						echo '<blockquote>';
						echo '<h3><a href="content.php?id='.$row['id'].'">'.mb_substr($row['title'], 0,13,'utf-8').'...</a></h3>';
						echo '</blockquote>';
						echo '';
						echo '';
						echo '';
				}
				?>
			</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>