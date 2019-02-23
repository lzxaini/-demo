<?php
include("../conn.php");
include("head.php");
?>
    <div class="main">
        <div class="content_div">
            <div class="content_title">新增分类</div>
            <form action="article_new_save.php" method="post" enctype="multipart/form-data">
            <div class="content">
                  <div class="art_issue">
                  <div class="art_title">
                        <label>
                        文章标题：
                        <span><input type="text" name="title" class="issu_title"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        文章分类：
                        <span>
                          <select name="cate_id" class="issu_title .issu_select">
                            <?php
                              $sql = "select * from category order by order_no asc,id desc";
                              $rs = mysqli_query($conn,$sql);
                              while($row = mysqli_fetch_assoc($rs)){
                                    echo '<option value="'.$row['id'].'">'.$row['cate_name'].'</option>';
                              }
                              mysqli_free_result($rs);
                            ?>
                          </select>
                        </span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        文章作者：
                        <span><input type="text" name="author" class="issu_title"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        文章内容：
                        <span><textarea name="content" class="issu_title"></textarea></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <label>
                        上传文件：
                        <span><input type="file" name="img" class="issu_title"></span>
                        </label>
                  </div>
                  <div class="art_title">
                        <span>
                          <button type="submit" name="" class="issu_btn">提交</button>
                        </span>
                  </div>
            </div>
        </form>
        </div>
    </div>
<?php
include("footer.php");
?>