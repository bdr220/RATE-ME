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

    <?php
include 'footer.php';


?>
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>