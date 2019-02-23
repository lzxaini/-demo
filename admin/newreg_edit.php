<?php
include("../conn.php");
include("head.php");
$id=$_GET["id"];
$sql = "select * from admin where id=$id";
$rs = mysqli_query($conn,$sql);
if(mysqli_num_rows($rs)>0){
      $row = mysqli_fetch_assoc($rs);
}else{
      echo "没有数据！";exit;
}
?>
    <div class="main">
        <div class="content_div">
            <div class="content_title">修改管理员</div>
            <form action="newreg_edit_save.php" method="post">
              <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <div class="content">
                  <div class="art_issue">
                  <div class="art_title">
                        <label>
                        管理员名称：
                        <span><input type="text" name="admin_user" class="issu_title" value="<?php echo $row['username']?>"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        管理员密码：
                        <span><input type="text" name="admin_flag" class="issu_title" value="<?php echo $row['flag']?>"></span>
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