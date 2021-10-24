<?php
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
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scal=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <title>Rate Me</title>
  <style>
    IMG.displayed {
      display: block;
      margin-left: auto;
      margin-right: auto
    }
  </style>
</head>

<body>
  <a href="../pages/login.php"><i class="fas fa-user" style="color:white; font-size: 30px;"></i></a>
  <header>
    <div class="container">
      <div class="menu-bar">
        <ul>
          <li><a href="../pages/index.php">الصفحة الرئيسية</a></li>
          <li class="active"><a href="#">التصنيفات</a>
            <div class="sub-menu">
              <ul>
                <li><a href="../pages/best.php"> افضل المطاعم</a></li>
                <li><a href="../pages/coff.php">كافيهات</a></li>
                <li><a href="../pages/fast.php">مطاعم سريعة</a></li>
                <li><a href="../pages/bre.php">فطور</a></li>
                <li><a href="../pages/classy.php">غالية</a></li>
              </ul>


            </div>
          </li>
          <li><a href="../pages/about.php">عن قيمني</a></li>

        </ul>
      </div>
    </div>
    <div class="content">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
          <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
          </h3>
        </div>
      <?php endif ?>

      <!-- logged in user information -->
      <?php if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
      <?php endif ?>
    </div>
  </header>
  <a href="../pages/index.php"><IMG class="displayed" src="../img/logo.png" alt="..."></a>

  <section>
    <div class="input-group" style="width:max-content; margin: auto;">
      <button type="button" class="btn btn-outline-primary"><i class="fas fa-search"></i></button>
      <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" />

    </div>
    <h3 style="text-align: center;">فطور</h3>
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