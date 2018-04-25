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
    <div class="navbar-header"">
    </div>
    <p class="navbar-text">Welcome to my page</p>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"">
      <div class="nav navbar-nav navbar-right">
      <div class="dropdown">
          <a href="#" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
          <?php
          if($_SESSION['username'] != null)
          ?> 
          <span><?php echo $_SESSION['username']; ?></span>
          <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="update.php">修改密碼</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="logout.php">登出</a></li>
          </ul>
      </div>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
include_once('9x9.php');

?>