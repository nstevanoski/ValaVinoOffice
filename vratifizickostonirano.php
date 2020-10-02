<?php
    include('security.php');
    if(isset($_POST['vratifizickostonirano_dugme'])) {
        $id = $_POST['vratifizickostonirano_id'];
        mysqli_query($connection, "INSERT INTO `otkupfizicko` SELECT * FROM `otkupfizickostonirani` WHERE `ID` = '$id'");
        mysqli_query($connection, "DELETE FROM `otkupfizickostonirani` WHERE `ID` = '$id'");
    }
    header("Location: vratifizickistonirani.php");
?>