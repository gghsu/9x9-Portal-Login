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
  </div>
</nav>

<?php
$id = $_POST['id'];
$pw = md5($_POST['pw']);

//搜尋資料庫資料
$sql = "SELECT * FROM `memberdata` where username = '$id'";
$result = mysql_query($sql);
$row = @mysql_fetch_row($result);

//判斷帳號與密碼是否為空白以及MySQL資料庫裡是否有這個會員
if($id != null && $pw != null && $row[2] == $id && $row[3] == $pw)
{
        $_SESSION['username'] = $id;
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
        echo '登入失敗!';
        echo '</br>';
        echo '<a class="btn btn-default" href="index.html" role="button">重新登入</a>';
}
?>
