# Assignment 12

1. 
You have been provided a math-problem.html file. Change the name of this file to Lastname-A12-math-problem.html. Modify this file to add a form with two text boxes that will ask the user for 2 integers.  In your <input> tags, use name="number1" for the first number and name="number2" for the second number. Also, tell the user that these numbers will be used in math calculations. Include a submit and reset button. Be sure to add color and a photo. 

2. 
You have been provided a math-problem.php file that will accept the 2 values from the html file. Change the name of this file to Lastname-A12-math-problem.php. It also contains the following logic:  

Uses an include() statement to include Lastname-inc-math-problems.php (change the name to reflect the name of your file)
Displays the two integers that were received from the html file.
Creates a table with the header row "Operation" and "Result"
Calls the addition function and passes it the 2 integers as parameters and displays the operation and the result as a row in a table.
Calls the subtraction function and passes it the 2 integers as parameters and displays the operation and the result as a row in a table.
Calls the multiplication function and passes it the 2 integers as parameters and displays the operation and the result as a row in a table.
Calls the division function and passes it the 2 integers as parameters and displays the operation and the result as a row in a table.
Modify the math-problem.php file to add your own css file and an image (you can use the same image as your html file.) Don't forget to have it link back to your html file. 

3.
 Write a Lastname-inc-math-problem.php file that will contain the 4 functions described below (use these names) and write the code to perform the tasks for each function as described below. Add comments to explain what each function does. 


addition function - receives 2 integers as parameters and adds the numbers and returns the result.
subtraction function - receives 2 integers as parameters and subtracts the second integer from the first integer and returns the result
multiplication function - receives 2 integers as parameters and multiplies the numbers and returns the result.
division function - receives 2 integers as parameters and divides the first number by the second number and returns the result, rounded to 2 decimal places. 

The function should check for division by zero. If the second number is zero, the function should not do the division and should return -1.

The pseudocode is provided for you at the top of the html and php files. Submit these files along with your image and css files:

Lastname-A12-math-problem.html
Lastname-A12-math-problem.php  
Lastname-inc-math-problem.php 
