<?php
echo"done";
if(!empty($_POST['Abhishek_Subject'])) {
    foreach($_POST['Abhishek_Subject'] as $check) {
        file_put_contents("alog.html", $check.PHP_EOL, FILE_APPEND | LOCK_EX);
    }
}
?>

<html>
	<head>
		<title>.
		</title>
	</head>
	<body>
		<script type="text/javascript">
			window.location.href="abhishek_owner.php";
		</script>
	</body>
</html>