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


    <h3 style="text-align: center;">كافيهات</h3>
    <div class="container" style="text-align: center; ">
      <div class="row align-items-start">
        <div class="col">
          <a href="../pages/zwz.php"><img src="../img/re1/dr cafe.jpg" alt=""
              class="border border-5 border border-dark"></a>
          <h5>د كيف</h5>
        </div>
        <div class="col">
          <a href="../pages/zafran.php"><img src="../img/re1/dunkin.gif" alt=""
              class="border border-5 border border-dark"></a>
          <h5>دانكن دونتس</h5>
        </div>
        <div class="col">
          <a href="../pages/njd.php"><img src="../img/re1/starbucks.jpg" alt=""
              class="border border-5 border border-dark"></a>
          <h5>ستاربكس</h5>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col">
          <a href="../pages/mc.php"><img src="../img/re1/vase.jpg" alt=""
              class="border border-5 border border-dark"></a>
          <h5> ڤازا كافيه</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/molten.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>مولتن شوكلیت كافيه</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/katak.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>كافيه كرك غلام</h5>
        </div>
      </div>
      <div class="row align-items-end">
        <div class="col">
          <a href="#"><img src="../img/re1/tou.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>توكان كافيه</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/caf.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>كاف كافيه</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/cap.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>كابري كافيه</h5>
        </div>
      </div>
    </div>
  </section>





  <script src="../js/bootstrap.min.js"></script>
</body>

</html>