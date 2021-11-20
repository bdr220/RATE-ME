<?php
 include 'header.php';
include('server.php') ?>

<?php


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
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Rating</title>

  <link rel="stylesheet" href="../css/slick.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>



<!--

  <form action="" method="post" accept-charset="utf-8">
    <fieldset>
        <legend>Review This Product</legend>    
    <p><label for="stars">Rating</label><input type="radio" name="stars"
      value="5" /> 5 
      <input type="radio" name="stars" value="4" /> 4
      <input type="radio" name="stars" value="3" /> 3 
      <input type="radio" name="stars" value="2" /> 2 
      <input type="radio" name="stars" value="1" /> 1
      </p>
    <p>
        <label for="review">Review</label><input type="text" name="review">
       </textarea>
    </p>
    <p>
        <input type="submit" name="reviewsub" value="Submit Review">
    </p>

</fieldset>
</form>

-->

  <section>
    <div class="container1">
      <div class="post">
        <div class="text">شكرا لتقيمك</div>
        <div class="edit">عدل</div>
      </div>
      <div class="star-widget">
        <input type="radio" name="rate" id="rate-5">
        <label for="rate-5" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-4">
        <label for="rate-4" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-3">
        <label for="rate-3" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-2">
        <label for="rate-2" class="fas fa-star"></label>
        <input type="radio" name="rate" id="rate-1">
        <label for="rate-1" class="fas fa-star"></label>
        <form action="#">
          <header></header>
          <div class="textarea">
            <textarea cols="30" placeholder="صف تجربتك(اختياري)"></textarea>
          </div>
          <div class="btn">

            <button type="submit">ارسل</button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <script>
    const btn = document.querySelector("button");
    const post = document.querySelector(".post");
    const widget = document.querySelector(".star-widget");
    const editBtn = document.querySelector(".edit");
    btn.onclick = () => {
      widget.style.display = "none";
      post.style.display = "block";
      editBtn.onclick = () => {
        widget.style.display = "block";
        post.style.display = "none";
      }
      return false;
    }
  </script> 
</body>

</html>