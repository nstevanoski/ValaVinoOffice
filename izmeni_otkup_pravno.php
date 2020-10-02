<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
     include('security.php');
?>

<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Измени податоци за откуп за правно лице </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM otkupcompany WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
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

<form action="code_izmeni_otkup_pravno.php" method="POST">

<div class="modal-body">
<div class="form-group">
        <p> Сите полиња се задолжителни освен полето за забелешки </p>
    </div>
    <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
    <div class="form-group">
        <label> Име на лицето кое го доставува грозјето (возач): </label>
        <input type="text" name="edit_vozac" class="form-control" value="<?php echo $row['vozac'] ?>">
    </div>
    <div class="form-group">
        <label>Датум на откуп:</label>
        <input type="date" name="edit_datumnaotkup" class="form-control" value="<?php echo $row['datumnaotkup'] ?>">
    </div>

    <div class="form-group">
        <label>Сорта на грозје:</label>
        <input type="text" name="edit_sortaotkuppravno" class="form-control" value="<?php echo $row['sortaotkuppravno'] ?>">
    </div>
    <div class="form-group">
        <label>Бруто:</label>
        <input type="text" name="edit_bruto" class="form-control" id="bruto" oninput="add_number()" value="<?php echo $row['bruto'] ?>">
    </div>
    <div class="form-group">
        <label>Дара:</label>
        <input type="text" name="edit_dara" class="form-control" id="dara" oninput="add_number()" value="<?php echo $row['dara'] ?>">
    </div>
    <div class="form-group">
        <label>Нето:</label>
        <input type="text" name="edit_neto" class="form-control" id="neto" oninput="netopocena()" value="<?php echo $row['neto'] ?>">
    </div>
    <div class="form-group">
        <label>Цена (ден/кг):</label>
        <input type="text" name="edit_cena" class="form-control" id="cena" oninput="netopocena()" value="<?php echo $row['cena'] ?>">
    </div>
    <div class="form-group">
        <label>Износ за исплата:</label>
        <input type="text" name="edit_iznoszaisplata" class="form-control" id="iznoszaisplata" value="<?php echo $row['iznoszaisplata'] ?>">
    </div>
    <div class="form-group">
        <label>Шеќер %:</label>
        <input type="text" name="edit_sekerp" class="form-control" value="<?php echo $row['sekerp'] ?>">
    </div>
   <div class="form-group">
        <label>Виногорје:</label>
        <input type="text" name="edit_vinogorje" class="form-control" value="<?php echo $row['vinogorje'] ?>">
    </div>
    <div class="form-group">
        <label>Начин на исплата</label>
        <label>7 дена</label>
        <input type="radio" name="edit_nacinnaisplata" value="7 дена">
         <label>3 рати</label>
         <input type="radio" name="edit_nacinnaisplata" value="3 рати">
        <div class="form-group">
        <label>Провизија за откуп:</label>
        <input type="text" name="edit_provizijazaotkup" class="form-control">
    </div>

              <a href="viewfizicki.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="izmenipravnootkup" class="btn btn-primary"> ИЗМЕНИ </button>

          </form>
    <?php
    }
}
?>
  </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->