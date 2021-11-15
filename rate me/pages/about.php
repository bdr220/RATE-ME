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
    <!-- هاذي علامه الخروج غيرت مكانها هنا -->
    <a href="index.php?logout='1'" style="color: white ;"><i  style="float:right; font-size: 35px;" class="fas fa-sign-out-alt "></i></a>
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
        <p> <strong><?php echo $_SESSION['username']; ?></strong></p>
        
      <?php endif ?>
    </div>
  <header>
    <div class="container">
      <div class="menu-bar">
        <ul>
          <li><a href="../pages/index.php">الصفحة الرئيسية</a></li>
          <li><a href="#">التصنيفات</a>
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
          <li class="active"><a href="#">عن قيمني</a></li>

        </ul>
      </div>
    </div>
  
  </header>




  <section style="text-align: center;">
    <a href="../pages/index.html"><IMG class="displayed" src="../img/logo.png" alt="..."></a>
    <h1>قيمني</h1>
    <h3> هو عباره عن برنامج تقيم فعلي للمطاعم والمنشآت الاخرا يساعد على تحسين المنشآت في الخدمه والاكل الخ</h3>
  </section>





  <script src="../js/bootstrap.min.js"></script>
</body>

</html>