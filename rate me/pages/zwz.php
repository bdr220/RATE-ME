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

    <section>
      
      <div class="card" style="width: 18rem; margin-left: auto; text-align: center;">
        <img src="../img/re1/zwz.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">زيت وزعتر</h5>
          <p class="card-text">فطور</p>
          <a href="../pages/rating.php" class="btn btn-primary stretched-link">قيم</a>
        </div>
      </div>

    </section>
    <script></script>
</body>

</html>