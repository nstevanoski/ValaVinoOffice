<?php
ob_start();
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php')
?>

<?php
  $admin = 0;
  $admin = $_SESSION['admince'];
?>

<div class="dostavuvaci-header">
  <h2>Стонирани ( правни лица )</h2>
  <p>Листа на стонирани лица ( правни лица )</p>

</div>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Правни лица
       
    </h6>
  </div>

  <div class="card-body">

  <div class="table-responsive">
    <?php
      if($admin == 0) header("Location: viewfizicki.php");
        $query = "SELECT * FROM otkupcompanystonirani";
        $query_run = mysqli_query($connection, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Брoj </th>
              <th>Избриши</th>
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
            <form action="vratipravnostonirani.php" method="post">
                  <input type="hidden" name="vratipravnostonirano_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="vratipravnostonirano_dugme" class="stonirajdugme"><?php  echo $row['id']; ?> | Врати стонирано</button>
                </form>
             </td>
             <td>
            <form action="izbrisipravnostonirani.php" method="post">
                  <input type="hidden" name="izbrisipravnostonirani_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="izbrisipravnostonirani_dugme" class="stonirajdugme">Избриши стонирано</button>
                </form>
             </td>
            <?php 
              $idsop = $row['sopstvenik'];
              $imeprez = mysqli_query($connection, "SELECT * FROM `companyregister` WHERE `ID` = '$idsop'");
              while($red = mysqli_fetch_assoc($imeprez)) {
                $ime = $red['imenaupravitel'];
                $prezime = $red['prezimenaupravitel'];
              }
            ?>
            <td><?php  echo $row['vozac']; ?></td>
            <td><?php echo("$ime $prezime"); ?></td>
            <td><?php  echo $row['datumnaotkup']; ?></td>
            <td><?php  echo $row['sortaotkuppravno']; ?></td>
            <td><?php  echo $row['bruto']; ?></td>
            <td><?php  echo $row['dara']; ?></td>
            <td><?php  echo $row['neto']; ?></td>
            <td><?php  echo $row['cena']; ?></td>
            <td><?php  echo $row['sekerp']; ?></td>
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

<?php
ob_end_flush();
?>