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
            <div class="content_title">留言管理列表</div>
            <div class="content">
              <table style="width:100%;" border="1">
                <tr>
                  <th width="50px">ID</th>
                  <th width="600px">留言内容</th>
                  <!-- <th width="100px">分类序号</th> -->
                  <th>操作</th>
                </tr>
                <tr>
                  <?php
                  $sql = "select * from guestbook order by leave_content asc,id desc";
                  $rs = mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($rs)){
                      echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['leave_content']."</td>";
                      // echo "<td>".$row['order_no']."</td>";
                      echo "<td>";
                      echo '<a href="guestbook_edit.php?id='.$row['id'].'">修改</a>/';
                      echo '<a href="guestbook_delete.php?id='.$row['id'].'">删除</a>';
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