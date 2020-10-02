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
    <h6 class="m-0 font-weight-bold text-primary"> Измени податоци за правно лице </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM companyregister WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="codecompany.php" method="POST">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Име на фирма: </label>
                  <input type="text" name="edit_imenafirma" value="<?php echo $row['imenafirma'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Име на управител:</label>
                  <input type="text" name="edit_imenaupravitel" value="<?php echo $row['imenaupravitel'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Презиме на управител:</label>
                  <input type="text" name="edit_prezimenaupravitel" value="<?php echo $row['prezimenaupravitel'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>ЕМБС:</label>
                  <input type="text" name="edit_embs" value="<?php echo $row['embs'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>ЕДБ:</label>
                  <input type="text" name="edit_edb" value="<?php echo $row['edb'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Жиро сметка:</label>
                  <input type="text" name="edit_zirosmetka" value="<?php echo $row['zirosmetka'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Депонентна банка:</label>
                  <input type="text" name="edit_deponentnabanka" value="<?php echo $row['deponentnabanka'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Адреса:</label>
                  <input type="text" name="edit_adresa" value="<?php echo $row['adresa'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Град:</label>
                  <input type="text" name="edit_grad" value="<?php echo $row['grad'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Поштенски код:</label>
                  <input type="text" name="edit_postenskikod" value="<?php echo $row['postenskikod'] ?>" class="form-control">
              </div>
                     <!--Прв ред податоци-->

  
   <hr>
   <div class="form-group">
                  <label>Сорта:</label>
                  <input type="text" name="edit_sorta" value="<?php echo $row['sorta'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Кат.opштина:</label>
                  <input type="text" name="edit_katastarskaopstina" value="<?php echo $row['katastarskaopstina'] ?>" class="form-control">
              </div>
   <div class="form-group">
                  <label>Кат.Парцела:</label>
                  <input type="text" name="edit_katastarskaparcela" value="<?php echo $row['katastarskaparcela'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Вик.место:</label>
                  <input type="text" name="edit_vikanomesto" value="<?php echo $row['vikanomesto'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Очекувано (kg):</label>
                  <input type="text" name="edit_ocekuvanokg" value="<?php echo $row['ocekuvanokg'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Површина:</label>
                  <input type="text" name="edit_povrsina" value="<?php echo $row['povrsina'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Шеќер (%):</label>
                  <input type="text" name="edit_seker" value="<?php echo $row['seker'] ?>" class="form-control">
              </div>
   <div class="form-group">
                  <label>Телефон:</label>
                  <input type="text" name="edit_telefon" value="<?php echo $row['telefon'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Провизија за откуп:</label>
                  <input type="text" name="edit_provizijazaotkup" value="<?php echo $row['provizijazaotkup'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Транспорт:</label>
                  <input type="text" name="edit_transport" value="<?php echo $row['transport'] ?>" class="form-control">
              </div>


              <a href="company.php" class="btn btn-danger" > CANCEL  </a>
              <button type="submit" name="updatebtn" class="btn btn-primary"> ИЗМЕНИ </button>

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