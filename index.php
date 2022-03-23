<?php 

if(!isset($_GET['lab'])){
	echo "Ссылка не верна.";
	exit();
}

$title = $_GET['lab'] . " lab";

$body = '';

$files = scandir(__DIR__, true);

foreach ($files as $file) {
	$name = explode(".", $file);
	if($name[1] == 'jpg'){

		$name = explode("+", $name[0]);

		if($name[0] == $_GET['lab']){

			$name = str_replace("_", " ", $name[1]);

			$body .= "<p>" . $name . "</p><img src='" . $file . "'><br><br>";
		}
	}
}

?>


<!DOCTYPE html>

<html lang="ru">
    <head>
	    <meta charset="utf-8">
	    <title>

		<?php echo "Бжахов - " . $title; ?>

		</title>
	</head>

	<body>

	<?php echo $body; ?>

	</body>
</html>