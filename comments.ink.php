<?php

require "dbh.ink.php";

function setComments($conn) {
    if (isset($_POST['commentSubmit'])){
        $code = $_POST['code'];
        $sql = "SELECT * FROM emails WHERE code='$code' ";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            if ($row = $result->fetch_assoc()) {
                //$_SESSION['id'] = $row['id'];
                $date = $_POST['date'];
                $uid = $_POST['uid'];
                $message = $_POST['message'];

                $sql = "UPDATE emails SET code='»]لءَإَ»»ُ^)' WHERE code='$code' ";
                $result = $conn->query($sql);

                $sql = "INSERT INTO comments (uid, date, message) VALUES ('$uid', '$date', '$message')";
                $result = $conn->query($sql);

                echo"Congratulations you are on the Nirsarem side! The Cold wyrm.";
            }
        }
        else{
            echo"Wrong knight registry number.";
        }
        
    }
    
}

function getComment($conn) {
    $sql = "SELECT * FROM comments";
    $result = $conn->query($sql);
    echo '<div id="DButtom" class="Dflex-container">';
    while ($row = $result->fetch_assoc()) {
        echo '<div class="tooltip"><img src="IMAGES/Dknight.png">
        <span class="tooltiptext">';
        echo $row['uid'], ":<br>";
        echo $row['message'],"<br><br>";
        echo '</span>
        </div>';
    }
    echo '</div>';
}
