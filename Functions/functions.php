<?php
//Exercices
//Use a function that capitalizes the first letter of the provided argument. Example: "émile"should return "Émile"
$name="émile";
function capitalize($name){
return mb_convert_case($name,MB_CASE_TITLE,"UTF-8");

}
echo "<br>";
print_r (capitalize($name));
echo "<br>";

//Use the native function allowing you to display the current year.
echo "<br>";
echo date("d-m-Y");
echo "<br>";

//Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
echo "<br>";
echo date("d-m-Y, h-i-s" );
echo"<br>";
//Crée a "Sum" function that takes 2 numbers and returns their sum.
//Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : "Error: argument is the not a number."
$Nb1=5;
$Nb2=10;
function add($Nb1,$Nb2){
    if (is_int($Nb1) && is_int($Nb2)){
    return ($Nb1+$Nb2);
}else {
    echo "Error: argument is the not a number.";
}
}
echo "<br>";
echo add($Nb1,$Nb2);
echo"<br>";

//Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word.
//Example: "In code we trust!" should return: ICWT).
$string="In code we trust";

if(preg_match_all('/\b(\w)/',strtoupper($string),$m)) {
    $acro = implode('',$m[1]); // $v is now SOQTU
}
echo "<br>";
echo $acro;
echo "<br>";

//Create a function that replaces the letters "a" and "e" with "æ". Example: "caecotrophie", "chaenichthys","microsphaera", "sphaerotheca" should respectively return "cæcotrophie", "chænichthys","microsphæra", "sphærotheca".
$array = ["caecotrophie", "chaenichthys","microsphaera", "sphaerotheca"];
$find = "ae";
$new = "æ";

for ($i = 0; $i < count($array); $i++) { 
    $array[$i] = str_replace($find, $new, $array[$i]) . "<br>";
}
print_r($array);

for ($i = 0; $i < count($array); $i++) { 
    $array[$i] = str_replace($new, $find, $array[$i]) . "<br>";
}
print_r($array);

//Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" (values: "info", "error", "warning"). This function would allow us to write this :
//echo feedback("Incorrect email address", "error");
//which will produce this html :

//<div class="error">Error: Incorrect email address.</div>
//Improve that function by giving the default class the value of "info". Look into the documentation documentation php.



//Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters. The screen will display a title "Generate a new word", and then the two generated words, and underneath, a bouton with the text "Generate").
/*$words= array(
    "apple",
    "banana",
    "car",
    "bird",
    "dog",
    "supermarket",
    "cat",
    "excelent",
    "superbe",
    "random",
    "house",
    "television",
    "cabinet",
    "glass"
);
shuffle($words);

echo"<br>";
$word1= $words[array_rand($words)];

while (strlen ($word1)>5){
if(strlen($word1)<=5){
    return $word1;
}
}
echo $word1;*/
function getRandomWord($len = 10) {
    $word = array_merge(range('a', 'z'), range('A', 'Z'));
    shuffle($word);
    return substr(implode($word), 0, $len);
}
echo getRandomWord();

//De-capitalize the string : "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"

$str="STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
$lower=strtolower($str);
echo"<br>";
echo $lower;
echo"<br>";

//In your new job, you have to maintain the code of a former developer. Make it DRY by creating a custom function calculate_cone_volume :

 $radius=5;
 $height=2;   

function calculate_volume($radius,$height){    
// Volume of a cone which ray is 5 and height is 2 
    $volume = ($radius*$radius)* M_PI * $height * (1/3); 
    echo "The volume of a cone wich ray is $radius and height is $height =" . $volume. "cm<sup>3/</sup><br />" ;
}
echo"<br>";
echo calculate_volume($radius,$height);
echo"<br>";