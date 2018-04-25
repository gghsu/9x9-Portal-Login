<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="index.css", rel="stylesheet">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    </div>
    <p class="navbar-text">Welcome to my page</p>
  </div>
</nav>

<?php
//將session清空
unset($_SESSION['username']);
echo '登出中';
echo '<meta http-equiv=REFRESH CONTENT=1;url=index.html>';
?>