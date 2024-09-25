<?php
    date_default_timezone_set("UTC");
    include 'dbh.ink.php';
    include 'email.ink.php';
    include 'comments.ink.php';
    include 'Pcomments.ink.php';
	header('Cache-Control: no-cache');
	header('Pragma: no-cache');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Great Wyrm War</title>
    <link rel="icon" type="IMAGES/x-icon" href="IMAGES/icon.ico">
    <link href="style.css" rel="stylesheet" type="text/css">
	<meta http-equiv="Expires" content="Tue, 01 Jan 1995 12:12:12 GMT">
	<meta http-equiv="Pragma"  content="no-cache">
</head>



<body>


    







    <div class="center">
    <p>A legendary war is about to breakdown between two ancient wyrms!<br>Choose which side you're going to be with</p>
    <p style = "font-weight: bold">To sign up as a noble knight write down your email!</p>
    <?php  
    $kcode = rand(10000000, 99999999);
    echo "<form method='POST' action='".setEmail($conn)."'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    <input type='hidden' name='code' value='".$kcode."'>
    <input class='tt' type='text' id='email' name='email' placeholder='Write your Email to get knight registry number' required> &nbsp
    <button type='submit' class='Dbutton' name='emailSubmit'>Sign me up!</button>
    </form>";
?>
    <p style = "font-weight: bold">If you already have a knight registry number click here:</p>
    <button class='DDbutton' onclick="document.location='index2.php'">Let me in!</button>





    <div class="ttooltip"><img id="DDragon" src="IMAGES/DDragon.png">
    <span class="ttooltiptext">
        Name: Nirsarem the dark ice wyrm <br>
        Gender: Unknown <br><br>

        Goal: Sleep in a dry bed<br><br>

        Description:<br>
        Breathes ice<br>
        Has social anxiety <br>
        Wants to sleep<br><br><br>


        If you win alongside them:<br>
        Taco Tuesday till the dawn of time<br>

    </span>  </div>

    



    <div class="ttooltip"><img id="PDragon" src="IMAGES/PDragon.png">
    <span class="ttooltiptext">
        Name: Veduss the pink ocean quean <br>
        Gender: Female <br><br>

        Goal: Expand the ocean<br><br>

        Description:<br>
        Can control ocean by raw magic<br>
        Extremely greedy <br>
        Wants to have a bigger territory<br><br><br>


        If you win alongside her:<br>
        Fish orgy<br>

    </span>  </div>

    <?php    
getComment($conn);
PgetComment($conn);
?>

</body>
</html>
