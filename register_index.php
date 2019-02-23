<?php
include("./conn.php");
include("./head.php");

//编写的sql语句;用于查询并且倒序
$sql = "SELECT * FROM guestbook ORDER BY id DESC";	
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
// var_dump($rws);
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
					<?php
					$pagesize=4;//设置每页显示几条
					$page=isset($_GET['page'])?$_GET['page']:1;//当前在第几页上/获取传的值
					$sql="select * from article";
					$rs=mysqli_query($conn,$sql);
					$records=mysqli_num_rows($rs);//获取当前总条数
					$pagecount=ceil($records/$pagesize);//一共多少页/计数/并且向上取整

					$start=($page-1)*$pagesize;
					$sql="select * from article limit $start,$pagesize";
					$rs=mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($rs)){
						echo '<div class="row info-content"">';
						echo '<div class="col-md-5 col-sm-5 col-xs-5">';
						echo '<img src="./upfiles/'.$row['img'].'" class="img-responsive">';
						echo '</div>';
						echo '<div class="col-md-7 col-sm-7 col-xs-7">';
						echo '<h4><a href="content.php?id='.$row['id'].'">'.$row['title'].'</a></h4>';
						echo '<p class="hidden-xs">'.mb_substr($row['content'], 0,100,'utf-8').'</p>';
						echo '<p style="text-align: right;">'.$row['intime'].'</p>';
						echo '</div>';
						echo '</div>';
				}
						echo '<nav aria-label="Page navigation" style="text-align:center;">';
						echo '<ul class="pagination">';
						echo '<li>';
						echo '<a href="#" aria-label="Previous">';
						echo '<span aria-hidden="true">&laquo;</span>';
						echo '</a>';
						echo '</li>';
						echo '<li>';
					for($i=1;$i<$pagecount;$i++) {
						echo '<li><a href="register_index.php?page='.$i.'">'.$i.'</a></li>';
					}
						echo '<li>';
						echo '<a href="#" aria-label="Next">';
						echo '<span aria-hidden="true">&raquo;</span>';
						echo '</a>';
						echo '</li>';
						echo '</ul>';
						echo '</nav>';
						echo '';
					?>	
				</div>
			</div>
			<div class="col-md-4 info-right hidden-xs hidden-sm">
				<blockquote>
					<h2>热门资讯</h2>
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
								 echo date( $rws['intime']);
								 ?>
							</p>
						</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include("footer.php");
?>