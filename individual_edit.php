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
    <h6 class="m-0 font-weight-bold text-primary"> Измени податоци за физичко лице </h6>
  </div>
  <div class="card-body">
<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

          <form action="code.php" method="POST">
                
              <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >
              
              <div class="form-group">
                  <label> Име: </label>
                  <input type="text" name="edit_ime" value="<?php echo $row['ime'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Презиме:</label>
                  <input type="text" name="edit_prezime" value="<?php echo $row['prezime'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>ЕМБГ:</label>
                  <input type="text" name="edit_embg" value="<?php echo $row['embg'] ?>" class="form-control">
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
                  <input type="text" name="edit_sorta" value="<?php echo $row['katopst'] ?>" class="form-control">
              </div>
   <div class="form-group">
                  <label>Кат.Парцела:</label>
                  <input type="text" name="edit_katparc" value="<?php echo $row['katparc'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Вик.место:</label>
                  <input type="text" name="edit_vikmesto" value="<?php echo $row['vikmesto'] ?>" class="form-control">
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
                  <label>Шеќер:</label>
                  <input type="text" name="edit_seker" value="<?php echo $row['seker'] ?>" class="form-control">
              </div>
   <div class="form-group">
                  <label>Телефон:</label>
                  <input type="text" name="edit_telefon" value="<?php echo $row['telefon'] ?>" class="form-control">
              </div>
              <div class="form-group">
                  <label>Датум на раѓање</label>
                  <input type="date" name="edit_datumnaragjanje" value="<?php echo $row['datumnaragjanje'] ?>" class="form-control">
              </div>

              <a href="individual.php" class="btn btn-danger" > CANCEL  </a>
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