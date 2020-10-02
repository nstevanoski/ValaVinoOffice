<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
include('security.php')
?>

<?php
  $izberipravni = $_POST["izberipravni"];
  if($izberipravni) {
    $izborpravni = $_POST["logpravni"];
  }
  else header("Location: novotkup.php");
?>


<script type="text/javascript">


function add_number() {
    var text1 = document.getElementById("bruto");
var text2 = document.getElementById("dara");
    var first_number = parseFloat(text1.value);
    if (isNaN(first_number)) first_number = 0;
    var second_number = parseFloat(text2.value);
    if (isNaN(second_number)) second_number = 0;
    var result = first_number - second_number;
    document.getElementById("neto").value = result + ".00";
}

function netopocena() {
    var text1 = document.getElementById("neto");
var text2 = document.getElementById("cena");
    var first_number = parseFloat(text1.value);
    if (isNaN(first_number)) first_number = 0;
    var second_number = parseFloat(text2.value);
    if (isNaN(second_number)) second_number = 0;
    var result = first_number * second_number;
    document.getElementById("iznoszaisplata").value = result + ".00";
}
</script>

<div class="container-fluid">
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Внесете ги потребните информации за физичко лице </h6>
  </div>
  <div class="card-body">
<form action="processotkuppravno.php" method="POST">

<div class="modal-body">
<div class="form-group">
        <p> Сите полиња се задолжителни освен полето за забелешки </p>
    </div>
    <div class="form-group">
        <label> Име на лицето кое го доставува грозјето (возач): </label>
        <input type="text" name="vozac" class="form-control">
    </div>
    <div class="form-group">
        <label>Датум на откуп:</label>
        <input type="date" name="datumnaotkup" class="form-control">
    </div>

    <div class="form-group">
        <label>Сорта на грозје:</label>
        <input type="text" name="sortaotkuppravno" class="form-control">
    </div>
    <div class="form-group">
        <label>Бруто:</label>
        <input type="text" name="bruto" class="form-control" id="bruto" oninput="add_number()">
    </div>
    <div class="form-group">
        <label>Дара:</label>
        <input type="text" name="dara" class="form-control" id="dara" oninput="add_number()">
    </div>
    <div class="form-group">
        <label>Нето:</label>
        <input type="text" name="neto" class="form-control" id="neto" oninput="netopocena()">
    </div>
    <div class="form-group">
        <label>Цена (ден/кг):</label>
        <input type="text" name="cena" class="form-control" id="cena" oninput="netopocena()">
    </div>
    <div class="form-group">
        <label>Износ за исплата:</label>
        <input type="text" name="iznoszaisplata" class="form-control" id="iznoszaisplata">
    </div>
    <div class="form-group">
        <label>Шеќер %:</label>
        <input type="text" name="sekerp" class="form-control">
    </div>
   <div class="form-group">
        <label>Виногорје:</label>
        <input type="text" name="vinogorje" class="form-control">
    </div>
    <div class="form-group">
        <label>Начин на исплата</label>
        <label>7 дена</label>
        <input type="radio" name="nacinnaisplata" value="7 дена">
         <label>3 рати</label>
         <input type="radio" name="nacinnaisplata" value="3 рати">
        <div class="form-group">
        <label>Провизија за откуп:</label>
        <input type="text" name="provizijazaotkup" class="form-control">
    </div>
    <?php echo "<input type = 'text' name = 'sopstvenikid' style = 'display:none;' value = '$izborpravni'/>"; ?>
</div>
<div class="modal-footer">
<a href="novotkup.php" class="btn btn-secondary" >НАЗАД</a>
   <button type="submit" name="registerbtn" class="btn btn-primary">Зачувај</button>
   <button type="submit" name="registerbtnprint" class="btn btn-primary">Зачувај и принтај</button>
</div>
</form>
</div>
</div>