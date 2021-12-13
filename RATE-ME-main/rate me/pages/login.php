<?php
 
include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/ww.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Log In</title>
    <style>
        section {
            background-color: white;
            padding: 15px;
            width: 350px;
            height: 450px;
            margin-left: auto;
            margin-right: auto;


            border-radius: 20%;
        }

        h2 {
            text-align: center;
        }

        .wrapper {

            text-align: center;
            padding: 50px;
            margin: 5px;
        }

        .wrapper div {
            margin-top: 5px;
        }

        .wrapper button {
            margin: 10px;

        }

        .wrapper input {
            font-size: 18px;
            text-align: center;
        }

        h2 {
            margin-top: 40px;
        }

        IMG.displayed {
            display: block;
            margin-left: auto;
            margin-right: auto
        }
    </style>
</head>
<body>
<header>
  
<nav class="navbar navbar-expand-lg navbar-light " style="background-color: snow; font-size: large;">

  <div class="container-fluid">
    <a class="navbar-brand" href="../pages/index.php" style="position: relative; left: 45%;"><img src="../img/logo.png" alt="" style="width: 100px;"></a>
  
    
    </div>
  </div>
</nav>


  </header>

    <section>
        <div>
            <h2>تسجيل دخول</h2>

            <div class="wrapper">

                <div id="provider_layout" class="content">
                    <div class="container">
                        <form method="post" action="login.php">
                            <?php include('errors.php'); ?>
                            <input type="hidden" name="_token" value="nSefrKMhkq7pN3JcdZ5y5RTexg53mPGssYs1JuqE">
                            <div class="form-group">

                            </div>
                            <div class="form-group">

                                <label for="">رقم الجوال</label>
                                <input class="form-control" type="text" name="phone" placeholder=" الرجاء إدخال رقم الجوال ">


                            </div>
                            <div class="form-group">
                                <label for="">كلمة المرور</label>
                                <input class="form-control" type="password" name="password" placeholder="الرجاء إدخال كلمة المرور">

                            </div>
                            <!-- <a class="forget" href="استعادة.html">هل نسيت كلة المرور ؟</a> -->
                            <button class="site-btn brown" type="submit" name="login_user">تسجيل الدخول</button>
                            <!-- <a class="d-block text-center sign-link" href="انشاء.html">أنشاء حساب</a> -->
                            <p>ليس لديك حساب؟<a href="register.php">اضغط هنا</a></p>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php
include 'footer.php';


?>
</body>

</html>