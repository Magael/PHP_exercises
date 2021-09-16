<?php
/*6. The Girl Soccer team
You want to create a soccer team for girls between 21 and 40 years old.

Create a form asking for the age, gender and name of the person. Use the $age and $gender variables in an if/else to display a "welcome to the team !" or "Sorry you don't fit the criteria" message.
7. Achieve the same, without the ELSE.
A key aspect of coding conditions is to keep them as simple as possible. Improve the previous exercise by using only an if statement (without the else), and a default value that changes only if the condition is true.*/

// Form processing
$gender=$_GET ["gender"];
$name=$_GET["name"];
if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
    $age = $_GET['age'];
    $message="Sorry $name you don't fit the criteria";
     if ($age >= 21 && $age <= 40 && $gender=="woman"){
         $message= " Welcome to the team $name !";
    }
    echo $message;
}
	
/*the ctype_digit() method above checks if a variable has numeric characters. This is optional and can be removed, although it helps to make sure that the correct value types have been passed.*/

// Form
?>
<form method="get" action="">
	<label for="age">Please type your age </label>
	<input type="" name="age">
    <br>
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" value= "man">
    <label for="man">Man</label>
    <input type="radio" name="gender" value= "woman">
    <label for="woman">Woman</label>
    <br>
    <label for="name">Please type your name</label>
    <input type="text" name="name">
    <hr>
    <input type="submit" name="submit" value="Greet me now">
</form>
