<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scal=1.0">
<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/ww.css">
  <link rel="stylesheet" href="../css/me.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
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



  <!-- هاذي حفت الاضافه -->
  <!-- <a href="../pages/sres.php" style="position: relative; left: 47%;"><i class="fas fa-plus" style="color: white; font-size: 30px;"></i></a> -->
   <!-- هاذي علامه الخروج غيرت مكانها هنا -->
  
  <div class="content">
      <!-- notification message -->
      <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success">
          <h3 style="color: white;">
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
  
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: snow; font-size: large;">

  <div class="container-fluid">
    <a class="navbar-brand" href="../pages/index.php"><img src="../img/logo.png" alt="" style="width: 100px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="position: relative; left: 35%; text-align: center; ">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../pages/index.php">الرئيسة</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../pages/about.php">عن قيمني</a>
        </li>
       
      
      </ul>
      <a href="../pages/profile.php"class="yo" title="profile"><i class="fas fa-user-circle"></i> </a>
      <br>
      <a href="index.php?logout='1'"class="yo" title="logout"> <i class="fas fa-sign-out-alt"></i></a>
    </div>
  </div>
</nav>


  </header>