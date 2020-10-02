<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php'); 
include('security.php')
?>


<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

<div class="modal-body">

    <div class="form-group">
        <label> Username </label>
        <input type="text" name="username" class="form-control" placeholder="Enter Username">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
        <small class="error_email" style="color: red;"></small>
    </div>
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter Password">
    </div>
    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
    </div>

    <input type="hidden" name="usertype" value="admin" >

</div>
<div class="modal-footer">
   <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
</div>
</form>

    </div>
  </div>
</div>

<div class="dostavuvaci-header">
  <h2>Доставувачи на грозје</h2>
  <p>Листа на доставувачи на грозје</p>

</div>
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Правни лица
       
          <a href="entercompany.php">  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              + Внеси нов доставувач 
            </button> </a>
    </h6>
  </div>

  <div class="card-body">

  <div class="table-responsive">
    <?php

        $query = "SELECT * FROM companyregister";
        $query_run = mysqli_query($connection, $query);
        
    ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th>Бр.на договор</th>
              <th>Измени</th>
              <th>Прегледај</th>
              <th>Име на фирма</th>
              <th>Име на управител </th>
              <th>Презиме на управител</th>
              <th>ЕМБС</th>
              <th>ЕДБ</th>
              <th>Жиро сметка</th>
              <th>Депонентна банка</th>
              <th>Адреса</th>
              <th>Град</th>
              <th>Поштенски код</th>
              <th>Сорта</th>
              <th>Катастарска општина</th>
              <th>Катастарска парцела</th>
              <th>Викано место</th>
              <th>Површина (m2)</th>
              <th>Очекувано (кг)</th>
              <th>Шеќер</th>
              <th>Телефон</th>
              <th>ДДВ Обврзник</th>
              <th>Провизија за откуп</th>
              <th>Транспорт</th>
              <th>Избриши</th>
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
            <td><?php  echo $row['id']; ?></td>
            <td>
                <form action="company_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"><i class="fas fa-edit"></i></button>
                </form>
            </td>
            <td>
                <form action="checkcompany.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                    <button  type="submit" name="edit_btn" class="pregledajdugme2"><i class="fas fa-eye"></i></button>
                </form>
            </td>
            <td><?php  echo $row['imenafirma']; ?></td>
            <td><?php  echo $row['imenaupravitel']; ?></td>
            <td><?php  echo $row['prezimenaupravitel']; ?></td>
            <td><?php  echo $row['embs']; ?></td>
            <td><?php  echo $row['edb']; ?></td>
            <td><?php  echo $row['zirosmetka']; ?></td>
            <td><?php  echo $row['deponentnabanka']; ?></td>
            <td><?php  echo $row['adresa']; ?></td>
            <td><?php  echo $row['grad']; ?></td>
            <td><?php  echo $row['postenskikod']; ?></td>
            <td><?php  echo $row['sorta']; ?></td>
            <td><?php  echo $row['katastarskaopstina']; ?></td>
            <td><?php  echo $row['katastarskaparcela']; ?></td>
            <td><?php  echo $row['vikanomesto']; ?></td>
            <td><?php  echo $row['povrsina']; ?></td>
            <td><?php  echo $row['ocekuvanokg']; ?></td>
            <td><?php  echo $row['seker']; ?></td>
            <td><?php  echo $row['telefon']; ?></td>
            <td><?php  echo $row['ddvobvrznik']; ?></td>
            <td><?php  echo $row['provizijazaotkup']; ?></td>
            <td><?php  echo $row['transport']; ?></td>
            <td>
                <form action="deletecompanydata.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
            </td>
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

