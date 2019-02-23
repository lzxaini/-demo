<?php
include("../conn.php");
include("head.php");
?>
<style type="text/css">
table th{
  padding: 15px 0;
  background-color: #BBFFFF;
}
table td{
  height: 50px;
}
</style>
    <div class="main">
        <div class="content_div">
            <div class="content_title">文章列表</div>
            <div class="content">
              <table style="width:100%;" border="1">
                <tr>
                  <th width="50px">ID</th>
                  <th width="100px">文章标题</th>
                  <th width="100px">文章分类</th>
                  <th width="600px">文章摘要</th>
                  <th width="50px">点击率</th>
                  <th width="100px">操作</th>
                </tr>
                <tr>
                  <?php
                  $sql = "select article.*,category.cate_name from article,category where article.cate_id=category.id order by article.id desc";
                  $rs = mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($rs)){
                      echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['title']."</td>";
                      echo "<td>".$row['cate_name']."</td>";
                      echo "<td>".mb_substr($row['content'],0,50,'utf-8')."</td>";
                      echo "<td>".$row['views']."</td>";
                      echo "<td>";
                      echo '<a href="article_edit.php?id='.$row['id'].'">修改</a>/';
                      echo '<a href="article_delete.php?id='.$row['id'].'">删除</a>';
                      echo "</td>";
                      echo "</tr>";
                  }
                  ?>
                </tr>
              </table>
            </div>
        </div>
    </div>
<?php
include("footer.php");
?>