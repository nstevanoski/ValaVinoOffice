<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
include('security.php')
?>

<?php
  $query = mysqli_query($connection, "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'test_db' AND TABLE_NAME = 'register'");
  while($red = mysqli_fetch_assoc($query)) {
    $sledenid = $red['AUTO_INCREMENT'];
  }
?>

<div class="container-fluid">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="enterindividual.php">Физичко лице</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="entercompany.php">Правно лице</a>
  </li>
</ul>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Внесете ги потребните информации за физичко лице </h6>
  </div>
  <div class="card-body">
<form action="processind.php" method="POST">

<div class="modal-body">
<div class="form-group">
        <p> Сите полиња се задолжителни освен полето за забелешки </p>
    </div>
    <div class="form-group">
        <label> Бр. договор: </label>
        <?php echo "<input type='text' name='id' class='form-control' disabled value = '$sledenid'/>"; ?>
    </div>
    <div class="form-group">
        <label> Име: </label>
        <input type="text" name="ime" class="form-control">
    </div>
    <div class="form-group">
        <label>Презиме:</label>
        <input type="text" name="prezime" class="form-control">
    </div>

    <div class="form-group">
        <label>ЕМБГ:</label>
        <input type="text" name="embg" class="form-control">
    </div>
    <div class="form-group">
        <label>Жиро сметка број:</label>
        <input type="text" name="zirosmetka" class="form-control">
    </div>
    <div class="form-group">
        <label>Депонентна банка:</label>
        <input type="text" name="deponentnabanka" class="form-control">
    </div>
    <div class="form-group">
        <label>Адреса:</label>
        <input type="text" name="adresa" class="form-control">
    </div>
    <div class="form-group">
        <label>Град</label>
        <input type="text" name="grad" class="form-control">
    </div>
    <div class="form-group">
        <label>Поштенски код</label>
        <input type="text" name="postenskikod" class="form-control">
    </div>
    <h3 class="sortinagrozjepredmet">Сорти на грозје предмет на откуп</h3>
       <!--Прв ред податоци-->
    <hr>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead >
    <tr>
      <th scope="col">Р.бр.</th>
      <th scope="col">Сорта</th>
      <th scope="col">Катастарска општина</th>
      <th scope="col">Катастарска парцела</th>
      <th scope="col">Викано место</th>
      <th scope="col">Површина(м2)</th>
      <th scope="col">Очекувано(кг)</th>
      <th scope="col">Шеќ. ед. во %</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>1</th>
      <td>
      <select class="odberivrstagrozje" name="sorta">
        <option value="Вранец">Вранец</option>
        <option value="Темјаника">Темјаника</option>
      </select>
      </td>
      <td>   
        <div class="form-group">
            <input type="text" name="katopst" class="form-control" >
         </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="katparc" class="form-control">
    </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="vikmesto" class="form-control" >
    </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="povrsina" class="form-control">
    </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="ocekuvanokg" class="form-control">
    </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="seker" class="form-control">
    </div>
      </td>
    </tr>
  </tbody>
  
</table>
  
   <hr>
   <div class="form-group">
        <label>Телефон</label>
        <input type="text" name="telefon" class="form-control">
    </div>
    <div class="form-group">
        <label>Датум на раѓање</label>
        <input type="date" name="datumnaragjanje" class="form-control">
    </div>
</div>
<div class="modal-footer">
<a href="individual.php" class="btn btn-secondary" >НАЗАД</a>
   <button type="submit" name="registerbtn" class="btn btn-primary">Внеси</button>
</div>
</form>
</div>
</div>