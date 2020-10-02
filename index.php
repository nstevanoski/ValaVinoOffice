<?php
include('home.php'); 
include('includes/header.php'); 
include('includes/navbar.php');
include('security.php');
?>

<?php
  $netofizicko = mysqli_query($connection, "SELECT SUM(neto) FROM `otkupfizicko`");
  $netopravno = mysqli_query($connection, "SELECT SUM(neto) FROM `otkupcompany`");
  while($r1 = mysqli_fetch_assoc($netofizicko)) {
    $vkupnofizicko = $r1['SUM(neto)'];
  }
  while($r1 = mysqli_fetch_assoc($netopravno)) {
    $vkupnopravno = $r1['SUM(neto)'];
  }
  $vkupnootkupeno = $vkupnofizicko+$vkupnopravno;
?>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->


  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
            <a href="choose.php">
            <div class="h5 mb-0 font-weight-bold text-gray-800">Доставувачи: <span class="dostavuvacibrojka">
            <?php
                 
                 $query = "SELECT id FROM register ORDER BY id";  
                 $query_run = mysqli_query($connection, $query);

                 $row = mysqli_num_rows($query_run);
                 $query2 = "SELECT id FROM companyregister ORDER BY id";
                 $query2_run = mysqli_query($connection, $query2);

                 $row2 = mysqli_num_rows($query2_run);
                 $add = $row+$row2;
                 echo ' '.$add.'';
               ?>

          </span></div>
            </div></a>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-blue-300" id="dostavuvaciikona"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-gray-800">Откупи: <span class="odkupibrojka">
              <?php
                 
                 $query = "SELECT id FROM otkupfizicko ORDER BY id";  
                 $query_run = mysqli_query($connection, $query);

                 $row = mysqli_num_rows($query_run); 
                 $query2 = "SELECT id FROM otkupcompany ORDER BY id";
                 $query2_run = mysqli_query($connection, $query2);

                 $row2 = mysqli_num_rows($query2_run);
                 $add = $row+$row2;
                 echo ' '.$add.'';
               ?>
              </span></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-chart-bar fa-2x text-green-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="h5 mb-0 font-weight-bold text-gray-800">Откупено грозје: <span class="otkupenogrozjebrojka"><?php echo number_format($vkupnootkupeno); ?> кг</span></div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-green-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Извештаи</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">Детален извештај за влез и излез</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-sticky-note fa-2x text-black-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  




