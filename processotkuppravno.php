<?php
session_start();
include('security.php');

if(isset($_POST['registerbtnprint']) || isset($_POST['registerbtn'])) {
    $registerkopce = 1;
}


if($registerkopce)
{
    $vozac = $_POST['vozac'];
    $datumnaotkup = $_POST['datumnaotkup'];
    $sortaotkuppravno = $_POST['sortaotkuppravno'];
    $bruto = $_POST['bruto'];
    $dara = $_POST['dara'];
    $neto = $_POST['neto'];
    $cena = $_POST['cena'];
    $sekerp = $_POST['sekerp'];
    $iznoszaisplata = $_POST['iznoszaisplata'];
    $vinogorje = $_POST['vinogorje'];
    $nacinnaisplata = $_POST['nacinnaisplata'];
    $sopstvenikid = $_POST['sopstvenikid'];

    $email_query = "SELECT * FROM otkupfizicko WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
        $_SESSION['status_code'] = "error";
        header('Location: register.php');  
    }
    else
    {
        {
            $query = "INSERT INTO otkupcompany (vozac,sopstvenik,datumnaotkup,sortaotkuppravno,bruto,dara,neto,cena,sekerp,iznoszaisplata,vinogorje,nacinnaisplata) VALUES ('$vozac','$sopstvenikid','$datumnaotkup','$sortaotkuppravno','$bruto','$dara','$neto','$cena','$sekerp','$iznoszaisplata','$vinogorje','$nacinnaisplata')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Новиот доставувач е успешно додаден";
                $_SESSION['status_code'] = "success";
            }
            else 
            {
                $_SESSION['status'] = "Новиот доставувач не е успешно додаден";
                $_SESSION['status_code'] = "error";
                  
            }
            if(isset($_POST['registerbtnprint'])) {
                $_SESSION['idzaprint'] = mysqli_insert_id($connection);
                header('Location: printotkuppravno.php');
            }
            else header('Location: viewcompany.php');
        }
    }

}
?>