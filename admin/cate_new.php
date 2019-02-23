<?php
include("../conn.php");
include("head.php");
?>
    <div class="main">
        <div class="content_div">
            <div class="content_title">新增分类</div>
            <form action="cate_new_save.php" method="post">
            <div class="content">
                  <div class="art_issue">
                  <div class="art_title">
                        <label>
                        分类名称：
                        <span><input type="text" name="cate_name" class="issu_title"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        分类排序：
                        <span><input type="text" name="order_no" class="issu_title"></span>
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