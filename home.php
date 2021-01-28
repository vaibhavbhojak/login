<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>welcome <?php echo $_session['username']; ?></h2>
<a href="logout.php">logout</a> 



</body>
</html>