<!DOCTYPE html>
<html>
<head>
	<!--	Author: 
			Date:	
			File:	math-problem.php
			Purpose: Chapter 13 Assignment
		
		Algorithm for math-problem.php
			Include functions from Terrell-inc-math-problem.php
			Receive number1 and number2 from Terrell-math-problem.html
			Display the two numbers received
			Display the table headers
			Call the addition function, passing it number1 and number2
			Print the results in the table
			Call the subtraction function, passing it number1 and number2
			Print the results in the table
			Call the multiplication function, passing it number1 and number2
			Print the results in the table
			Call the division function, passing it number1 and number2
			Print the results in the table
			Link back to the math-problem.html
		END
	-->
	<title>Math Problems</title>
	<link rel ="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h1>Math Problems </h1>
<?php
	// add call to include the file with the functions
	// change this file name to match your file name
	include ("inc-math-problem.php");

	// get the two numbers from the html file
	$number1 = $_POST['number1'];
	$number2 = $_POST['number2'];
	
	// display the numbers received
	print ("<p>The operations of $number1 and $number2 are shown in the table below.</p>");
	
	// print the table header
	print("<table border = \"1\">");
	print ("<tr><th>Operation</th><th>Result</th></tr>");
	
	// call each function and display the result as a row in the table
	$result = addition($number1, $number2);
	print ("<tr> <td>Addition</td><td>$result</td></tr>");

	$result = subtraction($number1, $number2);
	print ("<tr> <td>Subtraction</td><td>$result</td></tr>");
	
	$result = multiplication($number1, $number2);
	print ("<tr> <td>Multiplication</td><td>$result</td></tr>");
	
	$result = division($number1, $number2);
	print ("<tr> <td>Division</td><td>$result</td></tr>");

	print("</table>");

	
	// link back to original html program
	print("<p> <a href = \"math-problem.html\"> Return to Input </a></p>");


?>
</body>
</html>
