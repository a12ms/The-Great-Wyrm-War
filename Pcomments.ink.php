<?php

require "dbh.ink.php";

function PsetComments($conn) {
    if (isset($_POST['PcommentSubmit'])){
        $code = $_POST['code'];
        $sql = "SELECT * FROM emails WHERE code='$code' ";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            if ($row = $result->fetch_assoc()) {
            $date = $_POST['date'];
            $uid = $_POST['uid'];
            $message = $_POST['message'];

            $sql = "UPDATE emails SET code='»]لءَإَ»»ُ^)' WHERE code='$code' ";
            $result = $conn->query($sql);

            $sql = "INSERT INTO Pcomments (uid, date, message) VALUES ('$uid', '$date', '$message')";
            $result = $conn->query($sql);

            echo"Congratulations you are on the Veduss side! The deep ocean dragon.";
            }
        }
        else{
            echo"Wrong knight registry number.";
        }
    
    
}
}

function PgetComment($conn) {
    $sql = "SELECT * FROM Pcomments";
    $result = $conn->query($sql);
    echo '<div id="PButtom" class="Pflex-container">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="tooltip"><img src="IMAGES/Pknight.png">
        <span class="tooltiptext">';
        echo $row['uid'], ":<br>";
        echo $row['message'],"<br><br>";
        echo '</span>
        </div>';
    }
    echo '</div>';
}