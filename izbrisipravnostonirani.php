<?php
include('security.php');

if(isset($_POST['izbrisipravnostonirani_dugme']))
{
    $id = $_POST['izbrisipravnostonirani_id'];

    $query = "DELETE FROM otkupcompanystonirani WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: vratipravnistonirani.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: vratipravnistonirani.php'); 
    }  
}
?>