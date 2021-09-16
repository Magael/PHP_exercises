

<html>
  <head><title>Variable types!</title></head>
  <body>
  	<?php?>
        <?php $name = "Elsa";?>
    	<p>Hi! My name is <?php echo $name;?>!</p>
        <?php $age = 43;?>
        <p> I am <?php echo $age;?> years old.</p>
        <?php $eye_color="brown";?>
        <p>My eyes are <?php echo $eye_color;?>.</p>
        <?php $family = array(
                        0 => 'Artur', 
                        1 => 'Anabela', 
                        2 => 'Amélie', 
                        3 => 'Marine');?>
        <p>The first person in my family is <?php echo $family[0];?></p>
        <?php $hungry=true;?>
        <p>Am i hungry? </p>
        <?php if($hungry==true){
                echo "Yes.";
                } 
                else {
                    echo "No.";
                } ?>



   	<?php?>
    
  </body>
</html>
