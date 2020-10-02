<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');
?>
<div class="dostavuvaci-header">
  <h2>Изберете постоечки доставувач</h2>
  <p>За полесно пронаоѓање на доставувач, користете ја формата за пребарување</p>

</div>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Листа на доставувачи (физички лица)
       
    </h6>
  </div>

  <div class="card-body">
<?php
$Ime = array();
$Prezime = array();
$ID = array();
$brojfizicki = 0;

$fizicki = mysqli_query($connection, "SELECT * FROM `register`");
if(mysqli_num_rows($fizicki) > 0) {
    while($row = mysqli_fetch_assoc($fizicki)) {
        $Ime[] = $row['ime'];
        $Prezime[] = $row['prezime'];
        $ID[] = $row['id'];
        $brojfizicki++;
    }
}

?>

<form action = "novotkupfizicko.php" method = "POST">
    <select name = "logfizicki" class="izberidropdown">
        <?php 
            for($i = 0; $i < $brojfizicki; $i++) {
                $idred = $ID[$i];
                $imered = $Ime[$i];
                $prezimered = $Prezime[$i];
                echo "<option value = '$idred'>$imered $prezimered</option>";
            }
        ?>
    </select>
    <button value = "izberi" name = "izberifiz" class="izberidropdowndugme">Избери</button>
</form>

</div>
<!-- DataTales Example -->
</div>



<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Листа на доставувачи (правни лица)
       
    </h6>
  </div>
<div class="card-body">
<?php
$Imenaupravitel = array();
$Prezimenaupravitel = array();
$IDnaupravitel = array();
$imenafirma = array();
$brojpravni = 0;

$pravni = mysqli_query($connection, "SELECT * FROM `companyregister`");
if(mysqli_num_rows($pravni) > 0) {
    while($row = mysqli_fetch_assoc($pravni)) {
        $Imenaupravitel[] = $row['imenaupravitel'];
        $Prezimenaupravitel[] = $row['prezimenaupravitel'];
        $IDnaupravitel[] = $row['id'];
        $Imenafirma[] = $row['imenafirma'];
        $brojpravni++;
    }
}

?>

<form action = "novotkuppravno.php" method = "POST">
    <select name = "logpravni" class="izberidropdown">
        <?php 
            for($j = 0; $j < $brojpravni; $j++) {
                $idredpravno = $IDnaupravitel[$j];
                $imeredpravno = $Imenaupravitel[$j];
                $prezimeredpravno = $Prezimenaupravitel[$j];
                $imenafirma = $Imenafirma[$j];
                echo "<option value = '$idredpravno'>$imenafirma, $imeredpravno $prezimeredpravno</option>";
            }
        ?>
    </select>
    <button value = "izberi" name = "izberipravni" class="izberidropdowndugme">Избери</button>
</form>

</div>
  </div>
</div>