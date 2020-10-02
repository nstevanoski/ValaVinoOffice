<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<div class="logout">
     <p>Вработен: <?php echo $_SESSION['name']; ?> |  <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Одјави се</a></p>

</div>

<?php 
}else{
     header("Location: auth/index.php");
     exit();
}
 ?>