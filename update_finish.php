<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php
include("connMysql.inc.php");
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <p class="navbar-text">Welcome to my page</p>
  </div><!-- /.container-fluid -->
</nav>

<?php
$id = $_POST['id'];
$pw = md5($_POST['pw']);
$pw2 = md5($_POST['pw2']);

//判斷密碼是否填寫正確
if($_SESSION['username'] != null && $pw != null && $pw2 != null && $pw == $pw2)
{
        $id = $_SESSION['username'];
    
        //更新資料庫資料語法
        $sql = "update memberdata set password='$pw' where username='$id'";
        if(mysql_query($sql))
        {
                echo '修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
        else
        {
                echo '修改失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
        }
}
else{
    echo '請重新修改';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=update.php>';
}
?>