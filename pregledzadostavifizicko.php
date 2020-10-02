<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php');

$idsopstvenik = $_GET['id'];
?>


<div class="dostavuvaci-header">
  <h2>Откупи направени на физички лица</h2>
  <p>Листа на откупи на физички лица</p>

</div>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Физички лица
       
    </h6>
  </div>

  <div class="card-body">

  <div class="table-responsive">
    <?php

        $query = "SELECT * FROM otkupfizicko WHERE `sopstvenik` = '$idsopstvenik'";
        $query_run = mysqli_query($connection, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Брoj </th>
              <th></th>
              <th>Име на возач</th>
              <th>Име на сопственик</th>
              <th>Датум на откуп</th>
              <th>Сорта на грозје </th>
              <th>Бруто</th>
              <th>Дара</th>
              <th>Нето</th>
              <th>Цена</th>
              <th>Шеќер</th>
              <th>Износ за исплата (ден)</th>
              <th>Начин на исплата</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td>
            <form action="stonirajotkupfizicko.php" method="post">
                  <input type="hidden" name="stoniraj_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="stoniraj_dugme" class="stonirajdugme"><?php  echo $row['id']; ?>  <i class="fas fa-list-alt"></i>  | <i class="fas fa-times"></i>  Стонирај</button>
                </form>
             </td>           
            <td>
                <form action="izmeni_otkup_fizicko.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"><i class="fas fa-edit"></i></button>
                </form>
                <form action="printotkupfizicko.php" method="post">
                    <input type="hidden" name="printaj_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="printaj_dugme" class="btn btn-success"><i class="fas fa-print"></i></button>
                </form>
            </td>
            <?php 
              $idsop = $row['sopstvenik'];
              $imeprez = mysqli_query($connection, "SELECT * FROM `register` WHERE `ID` = '$idsop'");
              while($red = mysqli_fetch_assoc($imeprez)) {
                $ime = $red['ime'];
                $prezime = $red['prezime'];
              }
            ?>
            <td><?php  echo $row['vozac']; ?></td>
            <td><?php echo("$ime $prezime"); ?></td>
            <td><?php  echo $row['datumnaotkup']; ?></td>
            <td><?php  echo $row['sortaotkupfizicko']; ?></td>
            <td><?php  echo $row['bruto']; ?></td>
            <td><?php  echo $row['dara']; ?></td>
            <td><?php  echo $row['neto']; ?></td>
            <td><?php  echo $row['cena']; ?></td>
            <td><?php  echo $row['sekerf']; ?></td>
            <td><?php  echo $row['iznoszaisplata']; ?></td>
            <td><?php  echo $row['nacinnaisplata']; ?></td>
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
   
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

