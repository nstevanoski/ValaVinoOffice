<?php
include('security.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $imenafirma = $_POST['edit_imenafirma'];
    $imenaupravitel = $_POST['edit_imenaupravitel'];
    $prezimenaupravitel = $_POST['edit_prezimenaupravitel'];
    $embs = $_POST['edit_embs'];
    $edb = $_POST['edit_edb'];
    $zirosmetka = $_POST['edit_zirosmetka'];
    $deponentnabanka = $_POST['edit_deponentnabanka'];
    $adresa = $_POST['edit_adresa'];
    $grad = $_POST['edit_grad'];
    $postenskikod = $_POST['edit_postenskikod'];
    $sorta = $_POST['edit_sorta'];
    $katastarskaopstina = $_POST['edit_katastarskaopstina'];
    $katastarskaparcela = $_POST['edit_katastarskaparcela'];
    $vikanomesto = $_POST['edit_vikanomesto'];
    $ocekuvanokg = $_POST['edit_ocekuvanokg'];
    $povrsina = $_POST['edit_povrsina'];
    $seker = $_POST['edit_seker'];
    $telefon = $_POST['edit_telefon'];
    $ddvobvrznik = $_POST['ddvobvrznik'];
    $provizijazaotkup = $_POST['edit_provizijazaotkup'];
    $transport = $_POST['edit_transport'];


    $query = "UPDATE companyregister SET imenafirma='$imenafirma', imenaupravitel='$imenaupravitel', prezimenaupravitel='$prezimenaupravitel', embs='$embs', edb='$edb', zirosmetka='$zirosmetka', deponentnabanka='$deponentnabanka', adresa='$adresa', grad='$grad', postenskikod='$postenskikod', sorta='$sorta', katastarskaopstina='$katastarskaopstina', katastarskaparcela='$katastarskaparcela', vikanomesto='$vikanomesto', povrsina='$povrsina', ocekuvanokg='$ocekuvanokg', seker='$seker', telefon='$telefon', ddvobvrznik='$ddvobvrznik', provizijazaotkup='$provizijazaotkup', transport='$transport' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: company.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: company.php'); 
    }
}

?>