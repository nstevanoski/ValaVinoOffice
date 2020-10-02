<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $adresa = $_POST['adresa'];
    $grad = $_POST['grad'];
    $embg = $_POST['embg'];
    $katopst = $_POST['katopst'];
    $katparc = $_POST['katparc'];
    $vikmesto = $_POST['vikmesto'];
    $povrsina = $_POST['povrsina'];
    $sorta = $_POST['sorta'];
    $postenskikod = $_POST['postenskikod'];
    $ocekuvanokg = $_POST['ocekuvanokg'];
    $zirosmetka = $_POST['zirosmetka'];
    $deponentnabanka = $_POST['deponentnabanka'];
    $datumnaragjanje = $_POST['datumnaragjanje'];
    $brojnadostavi = $_POST['brojnadostavi'];
    $poslednadostava = $_POST['poslednadostava'];
    $telefon = $_POST['telefon'];
    $seker = $_POST['seker'];

    $email_query = "SELECT * FROM register WHERE email='$email' ";
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
            $query = "INSERT INTO register (ime,prezime,adresa,grad,embg,katopst,katparc,vikmesto,povrsina,sorta,postenskikod,ocekuvanokg,zirosmetka,deponentnabanka,datumnaragjanje,brojnadostavi,poslednadostava,telefon,seker) VALUES ('$ime','$prezime','$adresa','$grad','$embg','$katopst','$katparc','$vikmesto','$povrsina','$sorta','$postenskikod','$ocekuvanokg','$zirosmetka','$deponentnabanka','$datumnaragjanje','$brojnadostavi','$poslednadostava','$telefon','$seker')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Новиот доставувач е успешно додаден";
                $_SESSION['status_code'] = "success";
                header('Location: individual.php');
            }
            else 
            {
                $_SESSION['status'] = "Новиот доставувач не е успешно додаден";
                $_SESSION['status_code'] = "error";
                header('Location: individual.php');  
            }
        }
    }

}
?>