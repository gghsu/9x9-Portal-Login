<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="index.css", rel="stylesheet">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <p class="navbar-text">Welcome to my page</p>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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

    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    $_SESSION['n1'] = $_POST["n1"];
    $_SESSION['n2'] = $_POST["n2"];
   
    if( $n1>0 && $n2>0 )
    	for ($i=1;$i<=$n1;$i++){
    		for ($j=1;$j<=$n2;$j++){
    		echo $i."*".$j."=".$i*$j;
    	    echo ' ';
    	    }
    	    echo '/';
    	    echo '<br>';

    	}

    else{
    	echo 'please try again';
    }

    
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <a class="btn btn-default" href="member.php" role="button">再玩一次</a>
</body>
</html>