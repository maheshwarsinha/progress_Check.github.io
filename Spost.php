<?php

if(!empty($_POST['Sharad_subject'])) {
    foreach($_POST['Sharad_subject'] as $check) {
            file_put_contents("slog.html", $check.PHP_EOL, FILE_APPEND | LOCK_EX);
            echo"done";
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
			window.location.href="sharad_owner.php";
		</script>
	</body>
</html>