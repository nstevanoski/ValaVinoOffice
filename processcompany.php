<?php
include('security.php');

if(isset($_POST['registerbtn']))
{
    $imenafirma = $_POST['imenafirma'];
    $imenaupravitel = $_POST['imenaupravitel'];
    $prezimenaupravitel = $_POST['prezimenaupravitel'];
    $embs = $_POST['embs'];
    $edb = $_POST['edb'];
    $zirosmetka = $_POST['zirosmetka'];
    $deponentnabanka = $_POST['deponentnabanka'];
    $adresa = $_POST['adresa'];
    $grad = $_POST['grad'];
    $postenskikod = $_POST['postenskikod'];
    $sorta = $_POST['sorta'];
    $katastarskaopstina = $_POST['katastarskaopstina'];
    $katastarskaparcela = $_POST['katastarskaparcela'];
    $vikanomesto = $_POST['vikanomesto'];
    $povrsina = $_POST['povrsina'];
    $ocekuvanokg = $_POST['ocekuvanokg'];
    $seker = $_POST['seker'];
    $telefon = $_POST['telefon'];
    $ddvobvrznik = $_POST['ddvobvrznik'];
    $provizijazaotkup = $_POST['provizijazaotkup'];
    $transport = $_POST['transport'];
    

    $email_query = "SELECT * FROM companyregister WHERE email='$email' ";
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
            $query = "INSERT INTO companyregister (imenafirma,imenaupravitel,prezimenaupravitel,embs,edb,zirosmetka,deponentnabanka,adresa,grad,postenskikod,sorta,katastarskaopstina,katastarskaparcela,vikanomesto,povrsina,ocekuvanokg,seker,telefon,ddvobvrznik,provizijazaotkup,transport) VALUES ('$imenafirma','$imenaupravitel','$prezimenaupravitel','$embs','$edb','$zirosmetka','$deponentnabanka','$adresa','$grad','$postenskikod','$sorta','$katastarskaopstina','$katastarskaparcela','$vikanomesto','$povrsina','$ocekuvanokg','$seker','$telefon','$ddvobvrznik','$provizijazaotkup','$transport')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['status'] = "Новиот доставувач е успешно додаден";
                $_SESSION['status_code'] = "success";
                header('Location: company.php');
            }
            else 
            {
                $_SESSION['status'] = "Новиот доставувач не е успешно додаден";
                $_SESSION['status_code'] = "error";
                header('Location: company.php');  
            }
        }
    }

}
?>