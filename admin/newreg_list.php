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
            <div class="content_title">管理员列表</div>
            <div class="content">
              <table style="width:100%;" border="1">
                <tr>
                  <th width="50px">ID</th>
                  <th width="600px">管理员名称</th>
                  <th width="100px">管理员身份</th>
                  <th>操作</th>
                </tr>
                <tr>
                  <?php
                  $sql = "select * from admin order by username asc,id desc";
                  $rs = mysqli_query($conn,$sql);
                  while($row=mysqli_fetch_assoc($rs)){
                      echo "<tr>";
                      echo "<td>".$row['id']."</td>";
                      echo "<td>".$row['username']."</td>";
                      echo "<td>".$row['flag']."</td>";
                      echo "<td>";

                      echo '<a href="newreg_delete.php?id='.$row['id'].'">删除</a>';
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