<?php
/**
 * Series of exercises on PHP conditional structures.
*/  
// 3. "Different greetings according to age" Exercise
/*if age is less than 12 years old, display "Hello kiddo!"
if age is between 12 and 18 years old, display "Hello Teenager !"
if age is between 18 and 115 years old, display Hello Adult !"
if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"*/
/* 4. Display a different greeting according to the user's age and gender.
Improve the previous form to add another question: "Man or Woman?". Use an input of type radio to capture the data.

If gender is "Woman", the displayed message should be adapted accordingly.

For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".*/
/*5. Display a different greeting according to the user's age, gender and mothertongue.
Improve the previous form to add yet another question: "Do you speak English ? ". Use an input of type radio to capture the data. Possible answers: "yes" or "no".

Then modify your form processing script to implement this :

If age is below 12 and the user replies "yes", display : "Hello boy!" or "Hello Girl!" according to the gender indicated.
If the answer is "no", display "Aloha boy" or "Aloha Girl"
Adapt all the other answers accordingly, using "Aloha" instead of "Hello".*/


// Form processing
$gender=$_GET ["gender"];
$tongue=$_GET ["mother_tongue"];
if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
    $age = $_GET['age'];
    if ($tongue=="yes"){echo "Hello";}
        else {echo "Aloha";}
    if($age > 0 && $age <= 12 ) {
        if($gender=="woman"){
            echo " Girl!";
        }else{echo " Boy! ";}
        
    } else if($age > 12 && $age < 18) {
             if($gender=="woman"){
            echo " miss Teen!";
        }else{echo " mister Teen! ";}
    } else if($age >= 18 && $age <= 115) { 
        if($gender=="woman"){
            echo " miss Adult!";
        }else{echo " mister Adult! ";}
    } else if($age > 115) {
        echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?';
    }
}
	
/*the ctype_digit() method above checks if a variable has numeric characters. This is optional and can be removed, although it helps to make sure that the correct value types have been passed.*/

// Form (incomplete)
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
    <label for="mother_tongue">Do you speak English?</label>
    <input type="radio" name="mother_tongue" value="yes">
    <label for="yes">Yes</label>
    <input type="radio" name="mother_tongue" value="no">
    <label for="no">No</label>
    <hr>
    <input type="submit" name="submit" value="Greet me now">
</form>