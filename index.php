<?php
include("./conn.php");
include("./not_log_head.php");
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
						$sql = "select * from article order by intime desc limit 6";
						$rs = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($rs)){
							echo '<div class="row info-content">';
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
						echo '<h3><a href="">'.mb_substr($row['title'],0,8,'utf-8').'....</a></h3>';
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
</div>
<?php
include("footer.php");
?>