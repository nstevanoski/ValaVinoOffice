<?php
include('security.php');

if(isset($_POST['izbrisifizickistonirano_dugme']))
{
    $id = $_POST['izbrisifizickistonirano_id'];

    $query = "DELETE FROM otkupfizickostonirani WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: vratifizickistonirani.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: vratifizickistonirani.php'); 
    }  
}
?>