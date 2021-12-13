<?php
 
 include 'header.php';
session_start();

$conn = new mysqli('localhost', 'root', '', 'rate_me');

$stores = "SELECT * FROM stores";

$result_stores = mysqli_query($conn, $stores);

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<head>
<link rel="stylesheet" href="../css/style.css">
<link rel="stylesheet" href="../css/me.css">
</head>

 

  <section>
   
  
    <h3 style="text-align: center;">مطاعم مقترحة</h3>
    
   
        <?php while ($row = mysqli_fetch_array($result_stores)) { ?>
          
          <?php echo    '<div class="ii">'?>
          <a href='../pages/rating.php?s_id= <?php echo $row['store_id']; ?>'> <?php echo    "<img src='../img/re1/". $row['logo'] ."' class='border border-5 border border-dark' style='width: 200px; height: 200px;margin: 10px;'>" ?> </a>
         <?php echo " <h5>". $row['name_store'] . "</h5>" ?>
         <?php echo '</div>'?>
         
       
        <?php } ?>
      
    </div>
  </section>
  <?php
include 'footer.php';


?>



  <script src="../js/bootstrap.min.js"></script>
</body>

</html>