<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Sign In</title>
    <style>
        section {
            background-color: white;
            padding: 5px;
            width: 350px;
            height: 350px;
            margin-left: auto;
            margin-right: auto;
            border-radius: 20%;
        }

        h2 {
            text-align: center;
            margin: 0;
        }

        .wrapper {

            text-align: center;
            padding: 15px;
            margin: 15px;
        }

        .wrapper div {
            margin-top: 2px;
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

    </header>
    <a href="../pages/index.php"><IMG class="displayed" src="../img/logo.png" alt="..."></a>
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


</body>

</html>