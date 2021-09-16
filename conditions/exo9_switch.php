<?php
/*9. "School sucks!" Exercise
Start a new form that would allow a (nasty) teacher to grade a student.

It would display a different message according to the number annotated :

note below 4 : "This work is really bad. What a dumb kid! "
note between 5 and 9 : "This is not sufficient. More studying is required."
note equals 10 : "barely enough!"
note is 11, 12, 13 or 14 : "Not bad!"
note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
note is 19 or 20 : "Too good to be true : confront the cheater!"*/

// Form processing
    $grade = $_GET['grade'];
    $horrible=($grade<=4);
    $bad=($grade>=5&&$grade<=9);
    $mew=($grade>=11&&$grade<=14);
    $bravo=($grade>=15&&$grade<=18);
    $wow=($grade==19 || $grade==20);
    switch ($grade){
        case $horrible;
         echo " This work is really bad. What a dumb kid! ";
         break;
         case $bad;
         echo " This is not sufficient. More studying is required. ";
         break;
         case 10;
         echo " barely enough! ";
         break;
         case $mew;
         echo " Not bad! ";
         break;
         case $bravo;
         echo " Bravo, bravissimo! ";
         break;
         case $wow;
         echo " Too good to be true : confront the cheater! ";
         break;
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