<!DOCTYPE html>
<html>
<head>
	<title>RESULTADO DEL PUTOMETRO</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<H1 style="text-align:center;">El resultado del putometro es: </H1>
	<br>
	<hr>

<?php 

$sujeto1;
$sujeto2;
		
if(isset($_POST["submit"]))
{
	if(isset($_POST['sujeto1']) && isset($_POST['sujeto2']))
	{
		$sujeto1 = $_POST['sujeto1'];
		$sujeto2 = $_POST['sujeto2'];

		$numero = random_int(0,1);
		
		if($numero == 1)
		{

			echo("<h3 style='text-align:center'>Es mucho más put@ ".$sujeto1."</h3>");

		}
		else
			echo("<h3 style='text-align:center'>Es mucho más put@ ".$sujeto2."</h3>");
	}
}


 ?>

 <a href="index.php" class="btn btn-primary btn-lg active" role="button" style="position:relative;margin-left:35%">Volver</a>
</body>
</html>

