<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
     include('security.php');
?>

<div class="customerprofile">

<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    $query2 = mysqli_query($connection, "SELECT * FROM `otkupfizicko` WHERE `sopstvenik` = '$id'");
    $brojdostavi = mysqli_num_rows($query2);

    $query2 = mysqli_query($connection, "SELECT * FROM `otkupfizicko` WHERE `sopstvenik` = '$id' ORDER BY `id` DESC LIMIT 1");
    while($red = mysqli_fetch_assoc($query2)) {
      $posledendatum = $red['datumnaotkup'];
    }

    foreach($query_run as $row)
    {

        ?>     
        <h3 class="profilename"><?php echo $row['ime'] ?> <?php echo $row['prezime'] ?></h3>
        <div class="profilepicture">
          <img src="img/profile-pic.png">
    </div>
          <table >
            <tbody>
            <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Бр. договор: </span> <?php echo $row['id'] ?> <br></td>
              <td><span class="viewnames"> Име и презиме: </span> <?php echo $row['ime'] ?> <?php echo $row['prezime'] ?></td>
              <td><span class="viewnames"> Адреса: </span> <?php echo $row['adresa'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Град: </span> <?php echo $row['grad'] ?></td>
              <td><span class="viewnames"> ЕМБГ: </span> <?php echo $row['embg'] ?></td>
              <td><span class="viewnames"> Жиро сметка: </span> <?php echo $row['zirosmetka'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Депонентна банка: </span> <?php echo $row['deponentnabanka'] ?></td>
              <td><span class="viewnames"> Поштенски код: </span> <?php echo $row['postenskikod'] ?></td>
              <td><span class="viewnames"> Телефон: </span> <?php echo $row['telefon'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Сорта: </span> <?php echo $row['sorta'] ?></td>
              <td><span class="viewnames"> Кат.општина: </span> <?php echo $row['katopst'] ?></td>
              <td><span class="viewnames"> Кат.парцела: </span> <?php echo $row['katparc'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Вик.место: </span> <?php echo $row['vikmesto'] ?></td>
              <td><span class="viewnames"> Површина (m2): </span> <?php echo $row['povrsina'] ?></td>
              <td><span class="viewnames"> Очекувано (kg): </span> <?php echo $row['ocekuvanokg'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Број на достави: </span> <?php echo $brojdostavi; ?></td>
              <td><span class="viewnames"> Последна достава: </span> <?php echo $posledendatum; ?></td>
              <td><span class="viewnames"> Провизија за откуп: </span> </td>
             </tr>
        </tbody>
    </table>    
              <a href="individual.php" class="kopcenazad" > Назад  </a>
              <form action="printindividual.php" method="POST">
              <input type="hidden" name="printindividual_id" value="<?php echo $row['id']; ?>">
              <button class="btn-print" name="printindividual_dugme">Печати</button>
              <?php echo "<a href='pregledzadostavifizicko.php?id=$id' class='kopcenazad'>Преглед на извршени достави</a>"; ?>
    </form>
    <?php
    }
}
?>

</div>
<!-- /.container-fluid -->