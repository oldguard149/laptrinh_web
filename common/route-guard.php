<?php
    session_start();
    session_regenerate_id();
    if(!isset($_SESSION['username']))      // if there is no valid session
    {
        header("Location: " . $domain . "lab3/thongtincanhan/bai2.php");
    }
?>