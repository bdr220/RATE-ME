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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scal=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>profile</title>
    <style>
        section {
            background: none;
        }
    </style>
</head>

<body>
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
    <section style="margin-top: 200px;">
        <div class="container d-flex justify-content-center">
            <div class="card p-3 py-4" style="width: 350px; border-radius: 5%; background-color: whitesmoke;">
                <div class="text-center"> <img src="../img/insert.jpg" width="100" class="rounded-circle">
                    <h3 class="mt-2">name</h3>
                    <div class="row mt-3 mb-3">

                        <div class="col">
                            <h5>reviews</h5> <span class="num">10</span>
                        </div>

                    </div>
                    <hr class="line"> <small class="mt-4"></small>

                    <div class="profile mt-5"> <button class="profile_button px-5">edit</button> </div>
                </div>
            </div>
        </div>


    </section>


    <script src="../js/bootstrap.min.js"></script>
</body>

</html>