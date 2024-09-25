<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "dbh.ink.php";
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

function setEmail($conn) {
    if (isset($_POST['emailSubmit'])){
        //data base
        $email = $_POST['email'];
        $code = $_POST['code'];
        $date = $_POST['date'];  

        $sql = "SELECT * FROM emails WHERE email='$email' ";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {

            echo"You already used this email... I understand how much you like to serve this war but you did enough soldier.";
        
        }
        else {
           $sql = "INSERT INTO emails (email, date, code) VALUES ('$email', '$date', '$code')";
            $result = $conn->query($sql);
    
            //email sender
            $kcode = 'Here is your knight number: '. $code. ' you can now use it to join your preferred army by clicking on the "Let me in!" button on the website, or click on this link https://greendownhill.ir/dashboard/index2.php';
            $mail = new PHPMailer(true);
    
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'wyrmwar.soldierselection@gmail.com';
            $mail->Password = 'vljuggpgwzcukfer';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
    
            $mail->setFrom('wyrmwar.soldierselection@gmail.com');
    
            $mail->addAddress($email);
    
            $mail->Subject = 'Your knighthood request has been approved';
    
            $mail->Body = $kcode; //'Your knight number:'; //array('Your knight number:', )''
    
            $mail->send();
    
            echo
            "
            we have send your knight registry number, check your email.
            ";
        }

    }
    
}