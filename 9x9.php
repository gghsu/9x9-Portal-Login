<!DOCTYPE html>
<html>
<head>
	<title>9x9</title>
</head>
<body>
    <?php

        if(isset($_SESSION['n1']) && $_SESSION['n2'])
        {
        	echo "last input:";
    	    echo $_SESSION['n1'];
    	    echo "&";
    	    echo $_SESSION['n2'];
            }

        else{
    	  echo " ";
        }
    ?>

    <form method="post" action="result.php">
    please enter first number 
    <input type="number" name="n1"><br>
    please enter second number
    <input type="number" name="n2">
    <input type="submit" value="OK">
    </form>
</body>
</html>