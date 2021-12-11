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
    <title>Sign In</title>
    <style>
   section {
            background-color: white;
            padding: 15px;
            width: 400px;
            height: 500px;
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
        <h2>تسجيل </h2>

        <form method="POST" action="signin.php">
        <?php include('errors.php'); ?>
            <div class="wrapper">

                <div id="provider_layout" class="content">
                    <div class="container">
                        <div class="form-group">

                            <input type="hidden" name="_token" value="nSefrKMhkq7pN3JcdZ5y5RTexg53mPGssYs1JuqE">


                            
                            <label for="">اسم المستخدم</label>
                            <br>
                            <input class="form-control" type="text" name="username"
                                placeholder=" الرجاء إدخال اسم المستخدم ">




                                <br>
                            <label for="">رقم الجوال</label>
                            <br>
                            <input class="form-control" type="text" name="phone"
                                placeholder=" الرجاء إدخال رقم الجوال ">



                                <br>
                            <label for="">كلمة المرور</label>
                            <br>
                            <input class="form-control" type="password" name="password"
                                placeholder="الرجاء إدخال كلمة المرور">



                            <!-- <a class="forget" href="استعادة.html">هل نسيت كلة المرور ؟</a> -->
                            <button class="site-btn brown" type="submit" name="reg_user">تسجيل حساب</button>
                            <!-- <a class="d-block text-center sign-link" href="انشاء.html">أنشاء حساب</a> -->
                            <p>لديك حساب؟<a href="login.php">اضغط هنا</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>
    <?php
include 'footer.php';


?>

</body>

</html>