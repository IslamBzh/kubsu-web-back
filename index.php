<?php 

if(!isset($_GET['lab'])){
	echo "Ссылка не верна.";
	exit();
}

if($_GET['lab'] == '3'){
	
	require 'form.php';

	exit();

}

$title = $_GET['lab'] . " lab";

$body = '';

$files = scandir(__DIR__, true);

$fl = [];

foreach ($files as $file) {
	$name = explode(".", $file);
	if($name[(count($name) - 1)] == 'jpg'){
		unset($name[(count($name) - 1)]);

		$id = explode("+", $name[0])[1];

		$name = implode(".", $name);
		$name = explode("+", $name);

		if($name[0] == $_GET['lab']){

			$fname = str_replace("_", " ", $name[1]);

			$fl[$id] = "<p>" . $fname . "</p><img src='" . $file . "'><br><br>";
		}
	}
}

for ($i=0; $i < 15; $i++) {
	if(isset($fl[$i])) 
		$body .= $fl[$i];
	
}

?>


<!DOCTYPE html>

<html lang="ru">
    <head>
	    <meta charset="utf-8">
	    <title>

		<?php echo "Бжахов | " . $title; ?>

		</title>
	</head>

	<body>

	<?php echo $body; ?>

	</body>
</html>