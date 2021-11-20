<?php
session_start();
include 'header.php';
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

    <section>
        <div class="text-center">
            <img src="../img/re1/mc.jpg" class="rounded" alt="...">
            <h3>ماكدونالدز</h3>
            <button type="button" class="btn btn-light" style="font-size: 30px;"><a href="../pages/rating.php"
                    style="text-decoration: none; color: black;"> قيم المنشأة</a></button>
        </div>

    </section>
    <script></script>
</body>

</html>