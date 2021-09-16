<?php
$age = 24;
$is_adult = ($age >= 18) ? true : false;
// $is_adult is true
?>
<?php
$gender=$_GET["gender"];
$hello="How you doin', $gender?";
$woman=($gender=="F") ? true : false;
echo $hello;


?>
<form method="get" action="">
    <label for="gender">Man or Woman?</label>
    <input type="radio" name="gender" value="Hun">
    <label for="Hun">F</label>
    <input type="radio" name="gender" value="Boy">
    <label for="Boy">M</label>
    <input type="submit" name="submit" value="greet">
</form>

