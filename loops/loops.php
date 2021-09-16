<?php
$names= array('John', 'jeanne', 'Joan', 'émile');
var_dump($names);

foreach ($names as $key=> $value){
	$names[$key] = ucfirst($value);
}
var_dump($names);
$names= array('John', 'jeanne', 'Joan', 'émile');
foreach ($names as $name){
	echo ucfirst($name);
}

//exercise

$pronouns = array (
    'I'=>'code',
    'You'=>'code',
    'He/She'=>"codes",
    'We'=>"code",
    'You'=>"code",
    'They'=>"code");

foreach ($pronouns as $key=>$value) {
    echo'<br>';
    echo " " . $key . " " . $value;
    echo '<br>';
}
echo '<br>';
$number=1;
while ($number <= 120) {
    echo$number;
    echo '<br>';
    $number++;
}
for ($number=1;$number<=120;$number++){
    echo $number;
    echo '<br>';
}

$name=array(
    "Julie",
    "Amélie",
    "Marine",
    "Pepe",
    "Tristan",
    "Evy",
    "Eli",
    "Marianne"
);
foreach ($name as $key => $value) {
    echo '<br>';
    echo $value;
    echo '<br>';
}
$countries=array(
    "PT" => "Portugal",
    "SP" => "Spain",
    "I" => "Italy",
    "FR" => "France",
    "GR" => "Greece",
    "BE" => "Belgium",
    "LU" => "Luxembourg",
    "NL" => "Netherlands",
    "EN" => "England",
    "D" => "Germany"

);

?>
<form action="loops.php">
  <label for="countries">Choose a country:</label>
  <select name="country" id="country">
    <option><?php foreach ($countries as $key => $value) {
    
    echo  "<option>" . $value . "</option>";}?></option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>
