<?php
    include('security.php');
    if(isset($_POST['vratipravnostonirano_dugme'])) {
        $id = $_POST['vratipravnostonirano_id'];
        mysqli_query($connection, "INSERT INTO `otkupcompany` SELECT * FROM `otkupcompanystonirani` WHERE `ID` = '$id'");
        mysqli_query($connection, "DELETE FROM `otkupcompanystonirani` WHERE `ID` = '$id'");
    }
    header("Location: vratipravnistonirani.php");
?>