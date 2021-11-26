<?php
 include 'header.php';
session_start();

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







  <section style="text-align: center;">
    <a href="../pages/index.html"><IMG class="displayed" src="../img/logo.png" alt="..."></a>
    <h1>قيمني</h1>
    <h3> هو عباره عن برنامج تقيم فعلي للمطاعم والمنشآت الاخرا يساعد على تحسين المنشآت في الخدمه والاكل الخ</h3>
  </section>

  <?php
include 'footer.php';


?>



  <script src="../js/bootstrap.min.js"></script>
</body>

</html>