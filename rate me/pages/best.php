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
   
    <h3 style="text-align: center;">افضل المطاعم</h3>
    <div class="container" style="text-align: center; ">
      <div class="row align-items-start">
        <div class="col">
          <a href="../pages/zwz.php"><img src="../img/re1/zwz.png" alt=""
              class="border border-5 border border-dark"></a>
          <h5>زعتر وزيت</h5>
        </div>
        <div class="col">
          <a href="../pages/zafran.php"><img src="../img/re1/zafran.jpg" alt=""
              class="border border-5 border border-dark"></a>
          <h5>زافران الهندي</h5>
        </div>
        <div class="col">
          <a href="../pages/njd.php"><img src="../img/re1/njd.jpg" alt=""
              class="border border-5 border border-dark"></a>
          <h5>القرية النجدية</h5>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col">
          <a href="../pages/mc.php"><img src="../img/re1/mc.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>ماكدونالدز</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/mama.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>ماما نوره</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/indi.png" alt="" class="border border-5 border border-dark"></a>
          <h5>الصيف الهندي</h5>
        </div>
      </div>
      <div class="row align-items-end">
        <div class="col">
          <a href="#"><img src="../img/re1/ii.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>شاورما جليلة</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/alb.png" alt="" class="border border-5 border border-dark"></a>
          <h5>البيك</h5>
        </div>
        <div class="col">
          <a href="#"><img src="../img/re1/pizhut.jpg" alt="" class="border border-5 border border-dark"></a>
          <h5>بيتزا هت</h5>
        </div>
      </div>
    </div>
  </section>





  <script src="../js/bootstrap.min.js"></script>
</body>

</html>