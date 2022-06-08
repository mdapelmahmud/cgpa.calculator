<?php



$Bangla = $_POST["Bangla"];
$English = $_POST["English"];
$Math = $_POST["Math"];
$ICT = $_POST["ICT"];
$Science = $_POST["Science"];


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Result</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="resultConitner">
		<h4>Your GPA is: <?php 
		
		if($Bangla !=0 && $English !=0 && $Math !=0 && $ICT !=0 && $Science !=0)
		{
			$gpa = ($Bangla + $English + $Math + $ICT + $Science)/5;
			echo $gpa;

			?>
			<h5>Your Grade is: 
		</h5>
		<?php
			if($gpa==5){
				echo "A+";
			}
			elseif($gpa>=4 && $gpa<5){
				echo "A";
			}
			elseif($gpa>=3.5 && $gpa<4){
				echo "A-";
			}
			elseif($gpa>=3 && $gpa<3.5){
				echo "B";
			}
			elseif($gpa>=2 && $gpa<3){
				echo "C";
			}
			elseif($gpa>=1 && $gpa<2){
				echo "D";
			}
			else{
				echo "Fail";
			}
		}

		else
			echo "You got 0 point on any subject and Failed";
		?> </h4>
		
	</div>
</body>
</html>

