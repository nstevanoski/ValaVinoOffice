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
    
    $query = "SELECT * FROM companyregister WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    $query2 = mysqli_query($connection, "SELECT * FROM `otkupcompany` WHERE `sopstvenik` = '$id'");
    $brojdostavi = mysqli_num_rows($query2);

    foreach($query_run as $row)
    {

        ?>     
        <h3 class="profilename"><?php echo $row['imenaupravitel'] ?> <?php echo $row['prezimenaupravitel'] ?> | <span class="ddvobvrznikk">ДДВ Обврзник: <?php echo $row['ddvobvrznik'] ?></h3>
        <div class="profilepicture">
          <img src="img/profile-pic.png">
    </div>
          <table class="profiletable">
            <tbody>
            <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Бр. договор: </span> <?php echo $row['id'] ?> <br></td>
              <td><span class="viewnames"> Фирма: </span> <?php echo $row['imenafirma'] ?></td>
              <td><span class="viewnames"> Управител: </span> <?php echo $row['imenaupravitel'] ?> <?php echo $row['prezimenaupravitel'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> ЕМБС: </span> <?php echo $row['embs'] ?></td>
              <td><span class="viewnames"> Жиро сметка: </span> <?php echo $row['zirosmetka'] ?></td>
              <td><span class="viewnames"> Депонентна банка: </span> <?php echo $row['deponentnabanka'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Адреса: </span> <?php echo $row['adresa'] ?></td>
              <td><span class="viewnames"> Град: </span> <?php echo $row['grad'] ?></td>
              <td><span class="viewnames"> Поштенски код: </span> <?php echo $row['postenskikod'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Сорта: </span> <?php echo $row['sorta'] ?></td>
              <td><span class="viewnames"> Кат.општина: </span> <?php echo $row['katastarskaopstina'] ?></td>
              <td><span class="viewnames"> Кат.парцела: </span> <?php echo $row['katastarskaparcela'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Вик.место: </span> <?php echo $row['vikanomesto'] ?></td>
              <td><span class="viewnames"> Површина (m2): </span> <?php echo $row['povrsina'] ?></td>
              <td><span class="viewnames"> Очекувано (kg): </span> <?php echo $row['ocekuvanokg'] ?></td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> ЕДБ: </span> <?php echo $row['edb'] ?></td>
              <td><span class="viewnames"> Број на достави: </span> <?php echo $brojdostavi; ?></td>
              <td><span class="viewnames"> Последна достава: </span> </td>
             </tr>
             <tr class="checkprofileindcomp">
              <td><span class="viewnames"> Провизија за откуп: </span> <?php echo $row['provizijazaotkup'] ?></td>
              <td><span class="viewnames"> Транспорт: </span> <?php echo $row['transport'] ?></td>
              <td><span class="viewnames"> Телефон: </span> <?php echo $row['telefon'] ?> </td>
             </tr>
        </tbody>
    </table>    
              <a href="company.php" class="btn btn-danger" > CANCEL  </a>
              <button class="btn-print" onclick="window.print()">Принтај</button>
    <?php
    }
}
?>

</div>
