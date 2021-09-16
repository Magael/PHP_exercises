<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
// 2. "Different greetings according to time" Exercise
/*If the time is between 09h01 and 12h00, display "Good day !".
If the time is between 12h01 and 16h00, display "Good afternoon !".
If the time is between 16h01 and 21h00, display "Good evening !".
If the time is between 21h01 and 04h59, display "Good night !".*/

$now = date("H:i"); // How to get the current time in PHP ? Google is your friend ;-)
echo $now;
// Test the value of $now and display the right message according to the specifications.
 if ($now>="05:00" && $now <= "09:00"){
    echo " Good morning!";
}
    else if ($now>="09:01" && $now>="12:00"){
        echo " Good day!";
    }
    else if ($now>="12:01" && $now<="16:00"){
        echo " Good Afternoon!";
    }
    else if($now>="16:01"&&$now<="21:00") {
        echo " Good evening!";
    }
    else{
        echo " Good night!";
    }
?>