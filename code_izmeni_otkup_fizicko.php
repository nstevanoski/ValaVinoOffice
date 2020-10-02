<?php
include('security.php');

if(isset($_POST['izmenifizickiotkup']))
{
    $id = $_POST['edit_id'];
    $vozac = $_POST['edit_vozac'];
    $datumnaotkup = $_POST['edit_datumnaotkup'];
    $sortaotkupfizicko = $_POST['edit_sortaotkupfizicko'];
    $bruto = $_POST['edit_bruto'];
    $dara = $_POST['edit_dara'];
    $neto = $_POST['edit_neto'];
    $cena = $_POST['edit_cena'];
    $iznoszaisplata = $_POST['edit_iznoszaisplata'];
    $sekerf = $_POST['edit_sekerf'];
    $vinogorje = $_POST['edit_vinogorje'];
    $nacinnaisplata = $_POST['edit_nacinnaisplata'];


    $query = "UPDATE otkupfizicko SET vozac='$vozac', datumnaotkup='$datumnaotkup', sortaotkupfizicko='$sortaotkupfizicko', bruto='$bruto', dara='$dara', neto='$neto', cena='$cena', iznoszaisplata='$iznoszaisplata', sekerf='$sekerf', nacinnaisplata='$nacinnaisplata' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: viewfizicki.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: viewfizicki.php'); 
    }
}

?>