<?php
/*8. "School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!"*/

// Form processing
if (isset($_GET['grade']) && ctype_digit($_GET['grade'])) {
    $grade = $_GET['grade'];
     if($grade < 4) {
         echo " This work is really bad. What a dumb kid! ";       
    } else if($grade >= 5 && $grade <= 9) {
              echo " This is not sufficient. More studying is required.";
    } else if($grade == 10) { 
            echo " barely enough!";
    } else if($grade >= 11 && $grade<=14) {
        echo 'Not bad!';
    }else if($grade >= 15 && $grade<=18) {
        echo 'Bravo, bravissimo!';
    }else if($grade == 19 || $grade == 20) {
        echo 'Too good to be true : confront the cheater!';
    }
}
	
/*the ctype_digit() method above checks if a variable has numeric characters. This is optional and can be removed, although it helps to make sure that the correct value types have been passed.*/

// Form
?>
<form method="get" action="">
	<label for="grade">Please insert grade </label>
    <input type="" name="grade">
    <hr>
    <input type="submit" name="submit" value="Grade now">
</form>