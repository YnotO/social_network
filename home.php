<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome user!</title>
	<link rel="stylesheet" type="text/css" href="style/styles.css" media="all">
</head>
<body>
	 <h1>Welcome: <?php echo $_SESSION['user_email']; ?></h1>

</body>
</html>