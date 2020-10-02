<?php
    include('security.php');
    if(isset($_POST['stoniraj_dugme'])) {
        $id = $_POST['stoniraj_id'];
        mysqli_query($connection, "INSERT INTO `otkupfizickostonirani` SELECT * FROM `otkupfizicko` WHERE `ID` = '$id'");
        mysqli_query($connection, "DELETE FROM `otkupfizicko` WHERE `ID` = '$id'");
    }
    header("Location: viewfizicki.php");
?>