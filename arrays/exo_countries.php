<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );
echo $countries[2];
$family = array ("João Albino", "Amélia","Natália","Artur","Luis","Anabela","Jenny","João Filipe","Rita","Patricia","Pedro","Phillipa","João Tiago","Amélie","Marine","João Diogo","Lucas");
print_r($family);
$recipies=array("Bifanas","Moules","Lombo no forno","Pernas de frango no forno","Dourada Grelhada");
print_r($recipies);
$films=array("The Lake House","Avengers","Inception","Ironman");
echo $films[0];

//Check the content of an array for debugging
echo '<pre>';
print_r($countries);
echo '</pre>';
var_dump($countries);

//Add an element
array_push($countries, 'England');
$countries[] = 'England';

//Replace the value of a key by another one
$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';
echo $person['function'];

//Associative Arrays
$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';
$person[2] = 'Brussels';
// compare this
echo $person[1];
// with this
echo $person['street'];

//Coding an Associative Array
$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'adress' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
    echo $user['lastname'];

/*Exercise
Describe yourself using an associative array: $me. Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.*/
$me=array(
    "firstname"=>"Elsa Catarina",
    "lastname"=>"da Silveira Mateus de Magalhães",
    "age"=>43,
    "fav_season"=>"summer",
    "soccer"=>false
);
echo '<pre>';
print_r($me);
echo '</pre>';

//Multidimensional arrays
$me = array(
	'age'	=> 45 , 
	'firstname' 		=> 'Alexandre' ,
	'lastname' 	  		=> 'Plennevaux' ,
	'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')
);

echo '<pre>';
print_r($me);
echo '</pre>';

//Exercices
$me=array(
    "firstname"=>"Elsa Catarina",
    "lastname"=>"da Silveira Mateus de Magalhães",
    "age"=>43,
    "fav_season"=>"summer",
    "soccer"=>false,
    "hobbies"=>["colouring","watching tv", "cooking"],
);
$mother['mother']=array(
    "firstname"=>"Anabela",
    "lastname"=>"da Silveira ",
    "age"=>64,
    "fav_season"=>"summer",
    "soccer"=>false,
    "hobbies"=>["colouring","watching tv", "cooking"],
);
array_push($me,$mother);
echo '<pre>';
print_r($me);
echo '</pre>';

//Manipulating arrays exercises
$me=array(
    $mother=array("firstname"=>"Anabela",
    "lastname"=>"da Silveira ",
    "age"=>64,
    "fav_season"=>"summer",
    "soccer"=>false,
    "hobbies"=>["colouring","watching tv", "cooking"],
    ),
"firstname"=>"Elsa Catarina",
"lastname"=>"da Silveira Mateus de Magalhães",
"age"=>43,
"fav_season"=>"summer",
"soccer"=>false,
"hobbies"=>["colouring","watching tv", "cooking"],
);
echo '<pre>';
print_r($me);
echo '</pre>';
echo count($mother["hobbies"]);
echo count($me["hobbies"]);


$total= (count($mother["hobbies"]))+ (count($me["hobbies"]));
echo $total;

//Add an element in a multi-dimensional array
$me["hobbies"][]="taxidermy";
echo '<pre>';
print_r($me);
echo '</pre>';

//Replace
$me["lastname"]="Durand";
echo '<pre>';
print_r($me);
echo '</pre>';
//Create a new array from 2 others (or more)
$soulmate=array(
    "firstname"=>"Ricardo",
    "lastname"=>"Cid",
    "age"=>42,
    "fav_season"=>"summer",
    "soccer"=>false,
    "hobbies"=>["listening to music","watching tv", "walking","PS"],
);

$possible_hobbies_via_intersection = array_intersect($me["hobbies"],$soulmate["hobbies"]);
$possible_hobbies_via_merge=array_merge($me["hobbies"],$soulmate["hobbies"]);

echo '<pre>';
print_r($soulmate);
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

/*More array exercises
Let's get more fluent in array manipulation : add, delete and replace elements.*/
$web_development=array(
    'frontend'=>[],
    'backend'=>[]
);
array_push($web_development["frontend"],"xhtml");
array_push($web_development["backend"],"Ruby on rails");
array_push($web_development["frontend"],"css");
array_push($web_development["frontend"],"flash");
array_push($web_development["frontend"],"javascript");
$web_development["frontend"][0]="html";
unset($web_development["frontend"][2]);
echo '<pre>';
print_r($web_development);
echo '</pre>';