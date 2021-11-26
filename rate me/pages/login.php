<?php
 include 'header.php';
include('server.php') ?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>Log In</title>
    <style>
        section {
            background-color: white;
            padding: 15px;
            width: 350px;
            height: 350px;
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
                            <p>ليس لديك حساب؟<a href="signin.php">اضغط هنا</a></p>
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