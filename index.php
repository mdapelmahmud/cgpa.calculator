<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>GPA calculator</title>

	<link rel="stylesheet" href="style.css">



	<style>

		*{

			margin: 0;

			padding: 0;

		}

	</style>

</head>

<body>

	<div class="continer">

			<h1>GPA Calculator</h1>

			<form action="action.php" method="POST">

					<label for="Bangla">Bangla: </label><br>

					<input type="number" name="Bangla" required autocomplete="off" step="any" min="1" max="5"><br>

					<label for="English">English: </label><br>

					<input type="number" name="English" required autocomplete="off" step="any" min="1" max="5"><br>

					<label for="Math">Math: </label><br>

					<input type="number" name="Math" required autocomplete="off" step="any" min="1" max="5"><br>

					<label for="ICT">ICT: </label><br>

					<input type="number" name="ICT" required autocomplete="off" step="any" min="1" max="5"><br>

					<label for="Science">Science: </label><br>

					<input type="number" name="Science" required autocomplete="off" step="any" min="1" max="5"><br>

					<input type="submit" value="Submit" ><br>

			</form>



			

	</div>



</body>

</html>
