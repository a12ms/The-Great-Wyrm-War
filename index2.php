<?php
    date_default_timezone_set("UTC");
    include 'dbh.ink.php';
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
    <img id="DDragon" src="IMAGES/DDragon.png">
    <img id="PDragon" src="IMAGES/PDragon.png">







    <div class="center">
    <p style = "font-weight: bold">Choose which side you're with!</p>
    <?php
    echo "<form method='POST' action='".setComments($conn).PsetComments($conn)."'>
    <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
    Name:<br>
    <input class='tt' id='name' name='uid' required><br>
    Have Something to say?:<br>
    <textarea id='message' name='message'></textarea><br>
    Your knight registry number:<br>
    <input class='tt' id='code' name='code' maxlength='8' required><br><br>
    <button type='submit' class='button' name='commentSubmit'>Nirsarem</button>
    <button type='submit' class='pbutton' name='PcommentSubmit'>Veduss</button>
    </form>";
?>
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
