<?php
include('security.php');

if(isset($_POST['izmenipravnootkup']))
{
    $id = $_POST['edit_id'];
    $vozac = $_POST['edit_vozac'];
    $datumnaotkup = $_POST['edit_datumnaotkup'];
    $sortaotkuppravno = $_POST['edit_sortaotkuppravno'];
    $bruto = $_POST['edit_bruto'];
    $dara = $_POST['edit_dara'];
    $neto = $_POST['edit_neto'];
    $cena = $_POST['edit_cena'];
    $iznoszaisplata = $_POST['edit_iznoszaisplata'];
    $sekerp = $_POST['edit_sekerp'];
    $vinogorje = $_POST['edit_vinogorje'];
    $nacinnaisplata = $_POST['edit_nacinnaisplata'];


    $query = "UPDATE otkupcompany SET vozac='$vozac', datumnaotkup='$datumnaotkup', sortaotkuppravno='$sortaotkuppravno', bruto='$bruto', dara='$dara', neto='$neto', cena='$cena', iznoszaisplata='$iznoszaisplata', sekerp='$sekerp', nacinnaisplata='$nacinnaisplata' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: viewcompany.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: viewcompany.php'); 
    }
}

?>