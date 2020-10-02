<?php
include('security.php');

if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $ime = $_POST['edit_ime'];
    $prezime = $_POST['edit_prezime'];
    $adresa = $_POST['edit_adresa'];
    $grad = $_POST['edit_grad'];
    $embg = $_POST['edit_embg'];
    $katopst = $_POST['edit_katopst'];
    $katparc = $_POST['edit_katparc'];
    $vikmesto = $_POST['edit_vikmesto'];
    $povrsina = $_POST['edit_povrsina'];
    $sorta = $_POST['edit_sorta'];
    $postenskikod = $_POST['edit_postenskikod'];
    $ocekuvanokg = $_POST['edit_ocekuvanokg'];
    $zirosmetka = $_POST['edit_zirosmetka'];
    $deponentnabanka = $_POST['edit_deponentnabanka'];
    $datumnaragjanje = $_POST['edit_datumnaragjanje'];
    $brojnadostavi = $_POST['edit_brojnadostavi'];
    $poslednadostava = $_POST['edit_poslednadostava'];
    $telefon = $_POST['edit_telefon'];
    $seker = $_POST['edit_seker'];

    $query = "UPDATE register SET ime='$ime', prezime='$prezime', adresa='$adresa', grad='$grad', embg='$embg', katopst='$katopst', katparc='$katparc', vikmesto='$vikmesto', povrsina='$povrsina', sorta='$sorta', postenskikod='$postenskikod', ocekuvanokg='$ocekuvanokg', deponentnabanka='$deponentnabanka', datumnaragjanje='$datumnaragjanje', brojnadostavi='$brojnadostavi', poslednadostava='$poslednadostava', telefon='$telefon', seker='$seker'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: individual.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: individual.php'); 
    }
}

?>