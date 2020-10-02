<?php
    include('security.php');
    if(isset($_POST['stoniraj_dugme'])) {
        $id = $_POST['stoniraj_id'];
        mysqli_query($connection, "INSERT INTO `otkupcompanystonirani` SELECT * FROM `otkupcompany` WHERE `ID` = '$id'");
        mysqli_query($connection, "DELETE FROM `otkupcompany` WHERE `ID` = '$id'");
    }
    header("Location: viewcompany.php");
?>