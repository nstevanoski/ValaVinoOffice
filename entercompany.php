<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
include('security.php')
?>

<div class="container-fluid">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="enterindividual.php">Физичко лице</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="entercompany.php">Правно лице</a>
  </li>
</ul>
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"> Внесете ги потребните информации за правно лице </h6>
  </div>
  <div class="card-body">
<form action="processcompany.php" method="POST">

<div class="modal-body">
<div class="form-group">
        <p> Сите полиња се задолжителни освен полето за забелешки </p>
    </div>
    <div class="form-group">
        <label> Име на фирма: </label>
        <input type="text" name="imenafirma" class="form-control">
    </div>
    <div class="form-group">
        <label>Име на управител:</label>
        <input type="text" name="imenaupravitel" class="form-control">
    </div>

    <div class="form-group">
        <label>Презиме на управител:</label>
        <input type="text" name="prezimenaupravitel" class="form-control">
    </div>
    <div class="form-group">
        <label>ЕМБС:</label>
        <input type="text" name="embs" class="form-control">
    </div>
    <div class="form-group">
        <label>ЕДБ:</label>
        <input type="text" name="edb" class="form-control">
    </div>
    <div class="form-group">
        <label>Жиро сметка:</label>
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
        <label>Град:</label>
        <input type="text" name="grad" class="form-control">
    </div>
    <div class="form-group">
        <label>Поштенски код</label>
        <input type="text" name="postenskikod" class="form-control">
    </div>
       <!--Прв ред податоци-->
       <h3 class="sortinagrozjepredmet">Сорти на грозје предмет на откуп</h3>
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
        <option value="Vranec">Вранец</option>
        <option value="Temjanika">Темјаника</option>
        <option value="Pinot Noir">Пинот ноир</option>
      </select>
      </td>
      <td>   
        <div class="form-group">
            <input type="text" name="katastarskaopstina" class="form-control" >
         </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="katastarskaparcela" class="form-control">
    </div>
      </td>
      <td>
      <div class="form-group">
        <input type="text" name="vikanomesto" class="form-control" >
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
        <label>Телефон:</label>
        <input type="text" name="telefon" class="form-control">
    </div>
    <label>ДДВ Обврзник</label>
        <label>Да</label>
        <input type="radio" id="male" name="ddvobvrznik" value="Да">
         <label>Не</label>
         <input type="radio" id="female" name="ddvobvrznik" value="Не">
        <div class="form-group">
        <label>Провизија за откуп:</label>
        <input type="text" name="provizijazaotkup" class="form-control">
    </div>
    <div class="form-group">
    <label>Транспорт:</label>
        <input type="text" name="transport" class="form-control">
    </div>
    <div class="form-group">
    <label>Забелешка:</label>
        <input type="text" name="zabeleska" class="form-control">
    </div>
</div>
<div class="modal-footer">
<a href="company.php" class="btn btn-secondary" >НАЗАД</a>
   <button type="submit" name="registerbtn" class="btn btn-primary">Внеси</button>
</div>
</form>
</div>
</div>