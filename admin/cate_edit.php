<?php
include("../conn.php");
include("head.php");
$id=$_GET["id"];
$sql = "select * from category where id=$id";
$rs = mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
      $row = mysqli_fetch_assoc($rs);
}else{
      echo "没有数据！";exit;
}
?>
    <div class="main">
        <div class="content_div">
            <div class="content_title">修改分类</div>
            <form action="cate_edit_save.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <div class="content">
                  <div class="art_issue">
                  <div class="art_title">
                        <label>
                        分类名称：
                        <span><input type="text" name="cate_name" class="issu_title" value="<?php echo $row['cate_name']?>"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        分类排序：
                        <span><input type="text" name="order_no" class="issu_title" value="<?php echo $row['order_no']?>"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <span><input type="submit" name="" class="issu_title" value="提交"></span>
                  </div>
            </div>
        </form>
        </div>
    </div>
<?php
include("footer.php");
?>