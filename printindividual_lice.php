<?php
    include('security.php');
    if(isset($_POST['printindividual_dugme'])) {
        $id = $_POST['printindividual_id'];
        mysqli_query($connection, "SELECT * FROM `register` WHERE `ID` = '$id'");
    }
    header("Location: printindividual.php");
?>