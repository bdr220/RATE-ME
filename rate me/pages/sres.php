<!--انشاء المنشأه -->
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
        
            <div class="wrapper">

                <div id="provider_layout" class="content">
                    <div class="container">
                        <div class="form-group">

                            <input type="hidden" name="_token" value="nSefrKMhkq7pN3JcdZ5y5RTexg53mPGssYs1JuqE">
                            <form action="/action_page.php">
                                <label for="img">اختر صوره</label>
                                <input type="file" id="img" name="img" accept="image/*">
                                
                              </form>
                            
                            <label for="">اسم المنشأه</label>
                            <br>
                            <input class="form-control" type="text" name="username"
                                placeholder=" الرجاء إدخال اسم المنشأه  ">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>التصنيف</option>
                                    <option value="1">كافيهات</option>
                                    <option value="2">سريعة</option>
                                    <option value="3">غالية</option>
                                    <option value="4">فطور</option>
                                    
                                  </select>


                                <br>
                                <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">وصف المنشأه</label>
                                        <br>
                                        <div class="textarea">
            <textarea style="text-align:right" cols="30" placeholder="وصف"></textarea>
          </div>
                                </div>



                            <!-- <a class="forget" href="استعادة.html">هل نسيت كلة المرور ؟</a> -->
                            <button class="site-btn brown" type="submit" name="reg_user">تسجيل المنشأه</button>
                            <!-- <a class="d-block text-center sign-link" href="انشاء.html">أنشاء حساب</a> -->
                           
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>


</body>

</html>