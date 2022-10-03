<?php
echo "done";
if(!empty($_POST['Maheshwar_Subject'])) {
    foreach($_POST['Maheshwar_Subject'] as $check) {
        file_put_contents("mlog.html", $check.PHP_EOL, FILE_APPEND | LOCK_EX);
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
			window.location.href="maheshwar_owner.php";
		</script>
	</body>
</html>