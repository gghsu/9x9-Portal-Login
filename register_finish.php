<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="index.css", rel="stylesheet">
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
$name = $_POST['name'];
$email = $_POST['email'];

//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
$sql = "SELECT `username` FROM `memberdata` where `username` = '$id'";
$result = mysql_query($sql);
//$row = @mysql_fetch_row($result);
if ( mysql_num_rows($result) > 0 )
{
        echo '已有人使用此帳號';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=register.html>';
}
         
else if($id != null && $pw != null && $pw2 != null && $pw == $pw2){
        $sql = "INSERT INTO `memberdata`(`name`, `email`, `username`, `password`) VALUES ('$name','$email','$id','$pw')";
        if(mysql_query($sql)) 
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
        }
        else
        {
                echo '新增失敗';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=register.html>';
        }
}

else
{
        echo '新增失敗!請重新註冊';
        echo '</br>';
        echo '<a href="register.html">重新註冊</a>';
}
?>