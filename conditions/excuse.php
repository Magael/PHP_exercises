<html>
<head>
<link rel="stylesheet" href="Assets/css/excuse.min.css"> 
<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
<body>
<div id="logo">
    <img src="Assets/img/logo.png" alt="logo" />
</div>
    <h1>Excuses generator</h1>
<form method="post" action="">
    <label for="name">Your childs name:</label>
    <input type="text" name="name">
    <br>
    <label for="gender">Your childs gender:</label>
    <input type="radio" name="gender" value="boy">
    <label for="boy">Boy</label>
    <input type="radio" name="gender" value= "girl">
    <label for="girl">Girl</label>
    <br>
    <label for="teacher">Teachers name:</label>
    <input type="text" name="teacher">
    <br>
    <label for="reason">Reason for the absence:</label>
    <br>
    <input type="radio" name="reason" value="illness">
    <label for="illness">Illness</label>
    <br>
    <input type="radio" name="reason" value="death">
    <label for="death">Death of a pet (or a family member)</label>
    <br>
    <input type="radio" name="reason" value="activity">
    <label for="activity">Significant extra-curricular activity</label>
    <br>
    <input type="radio" name="reason" value="other">
    <label for="other">Any other excuse of your choice</label>
    <br>
    <br>
    <label for="from">From:</label>
    <input type="date" id="from" name="from">
    <br>
    <label for="until">Until:</label>
    <input type="date" id="until" name="until">
    <br>
    <br>
    <input type="submit" name="submit" value="Generate">
</form>

    
<?php if(isset($_POST['name']) && isset($_POST['reason']) && isset($_POST['gender']) && isset($_POST['teacher'])&& isset($_POST['from'])&& isset($_POST['until'])){
    $name= $_POST ["name"];
    $gender= $_POST ["gender"];
    $teacher= $_POST ["teacher"];
    $reason= $_POST["reason"];
    $from=$_POST["from"];
    $until=$_POST["until"];
    $illness=array(
        0 => "fever",
        1 => "diarrhea",
        2 => "vomiting",
        3 => "migraine",
        4 => "broken leg",
    );
    $death=array(
        0=>"the canarys' death",
        1=> "the grandfathers' death",
        2=> "the grandmothers' death",
        3=> "the dogs' death",
        4=> "the cats' death",
    );
    $activity=array(
        0=> "soccer practice",
        1=> "swimming competition",
        2=> "basketball game",
        3=> "dance recital",
        4 =>"piano recital",
    );
    $other=array(
        0=>"oversleeping",
        1=>"not sleeping through the night",
        2=>"not being in the mood",
        3=>"teenage crisis",
        4=> "going shopping",
    );
    $randIllness= array_rand($illness);
    $randDeath=array_rand($death);
    $randActivity=array_rand($activity);
    $randOther=array_rand($other);
   
    if($reason == "illness"){ 
        $reason=$illness[$randIllness];
    }else if($reason == "death"){ 
         $reason=$death[$randDeath];
    }else if ($reason == "activity"){ 
         $reason=$activity[$randActivity];
    }else if ($reason == "other"){ 
         $reason=$other[$randOther];
    }
}
?>
<div id="para">
<?php if(isset($_POST['name']) && isset($_POST['reason']) && isset($_POST['gender']) && isset($_POST['teacher'])&& isset($_POST['from'])&& isset($_POST['until'])){?>
    <p id="date"><?php echo date("l, d F Y");?></p>
    <br>
    <p>Dear <?php echo $teacher;?>,</p>
    
    <p>This note is to inform you that my <?php echo $gender ." ". $name;?> will not be able to attend school from <?php echo $from . " to " . $until?>, due to <?php echo $reason;?>. </p>
   
    <p>Thank you for your kind consideration to the above matter.</p>
    
    <p>Sincerely,</p>
    <?php } ?>
<div>
</body>
</html>
