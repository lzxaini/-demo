<?php
include("../conn.php");
include("head.php");
?>
    <div class="main">
        <div class="content_div">
            <div class="content_title">新增管理员</div>
            <form action="newreg_new_save.php" method="post">
            <div class="content">
                  <div class="art_issue">
                  <div class="art_title">
                        <label>
                        管理员名称：
                        <span><input type="text" name="admin_user" class="issu_title"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        管理员密码：
                        <span><input type="password" name="admin_pws" class="issu_title"></span>
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