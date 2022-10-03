<?php
    $contents = file("slog.html");
?>

<html>
	<head>
		<title>.
		</title>
	</head>
	<body>
		<script type="text/javascript">
			const arr = <?php echo json_encode($contents);?>;
            for(var i = 0;i<2;i++)
            {
                <?php $x = '<script>document.writeln(i);</script>';
				echo $x;
				?>
				
            }
		</script>
	</body>
</html> 

 