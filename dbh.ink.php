<?php

$conn = mysqli_connect('localhost', 'root', '', 'commentsectiondp');

if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
}