
<form method="get" action="">
    <label for="gender">Are you a human, a cat or a unicorn ?</label>
    <br>
    <input type="radio" name="gender" value="Human">
    <label for="Human">Human</label>
    <br>
    <input type="radio" name="gender" value="cat">
    <label for="cat">Cat</label>
    <br>
    <input type="radio" name="gender" value="unicorn">
    <label for="unicorn">Unicorn</label>
    <br>
    <input type="submit" name="submit" value="greet">
    <br>

 <?php

    $gender=$_GET["gender"];
    $human="<img src='Assets/img/human.gif' alt= 'human'/>";
    $cat="<img src='Assets/img/cat.gif' alt= 'cat'/>";
    $unicorn="<img src='Assets/img/unicorn.gif' alt= 'unicorn'/>";
    echo ($gender == "Human") ? $human : false;
    echo ($gender == "cat") ? $cat : false;
    echo ($gender == "unicorn") ? $unicorn : false;
?>
</form>
