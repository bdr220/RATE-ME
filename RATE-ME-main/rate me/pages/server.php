<?php
session_start();

// initializing variables
$username = "";
$phone    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'rate_me');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($phone)) { array_push($errors, "phone is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or phone
  $user_check_query = "SELECT * FROM users WHERE uname='$username' OR phone_number='$phone' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['phone'] === $phone) {
      array_push($errors, "phone already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (uname, phone_number, Password) 
  			  VALUES('$username', '$phone', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($phone)) {
        array_push($errors, "phone is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE phone_number='$phone' AND Password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
         $_SESSION['username'] = $username;
         $_SESSION['phone'] = $phone;
          $_SESSION['success'] = "You are now logged in";
          header('location: index.php');
        }else {
            array_push($errors, "Wrong phone/password combination");
        }
    }
  }
  
 
// REVIEW PART
  if (isset($_POST["reviewsub"])){
      $rating= ($_POST["stars"]);
      $review=($_POST["review"]);
      echo "".$review."";
      echo "" .$rating."";
      echo "geluuuuukt";
  
   
  try {
  
  $db = new ("dbinfo"); 
  $query = $db->prepare("INSERT INTO reviews (review, stars) VALUES ($nRows, $review, $rating)");  if($query->execute()) {
     echo "Success. Your review has been uploaded";
  }
   else {
     echo "An error has occured";
   }

  }
   catch (PDOException $e) {
  die("Error!: " . $e->getMessage());
  }
}
  
  

  ?>