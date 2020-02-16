<!DOCTYPE html>
<html>
<head>
	<title>NO HAY NADIE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<h1 style="text-align:center;">EL PUTOMETRO DE NO HAY NADIE</h1>
	<form action="comprobarpts.php" method="POST">
	  <div class="form-group" style="width:30%;margin-left:35%">
	  	<h3>¿Quién es más put@?</h3>
	    <label for="sujeto1">Sujeto 1</label>
	    <input type="text" class="form-control" id="sujeto1" name="sujeto1" placeholder="Sujeto 1">
	    <label for="suejto2">Sujeto 2</label>
	    <input type="text" class="form-control" id="sujeto2" name="sujeto2" placeholder="Sujeto 2">
	    <hr>
	    <button type="submit" class="btn btn-primary"style="margin-left:40%" name="submit" value="Comprobar">Comprobar</button>

	  </div>
	  
	</form>
</body>
</html>