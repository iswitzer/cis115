<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage1.php
		Purpose:Calculates and displays a weekly wage
		Input: 	none
		Output: HTML document that displays hourlyWage, hoursWorked, weeklyWage
-->


<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>
<body>

	<h1>WAGE REPORT</h1>

	<?php

		$hourlyWage = 15.75;
		$hoursWorked = 19;
		$wage = $hourlyWage * $hoursWorked;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
	?>

</body>
</html>
