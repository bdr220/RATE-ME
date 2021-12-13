<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name_store = $phone_number = $info = $logo = "";
$name_store_err = $phone_number_err = $info_err = $logo_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name_store
    $input_name_store = trim($_POST["name_store"]);
    if(empty($input_name_store)){
        $name_store_err = "Please enter a name_store.";
    } elseif(!filter_var($input_name_store, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_store_err = "Please enter a valid name_store.";
    } else{
        $name_store = $input_name_store;
    }
    
    // Validate phone_number
    $input_phone_number = trim($_POST["phone_number"]);
    if(empty($input_phone_number)){
        $phone_number_err = "Please enter a phone_number.";         
    } 
    elseif(!ctype_digit($input_phone_number)){
        $phone_number_err = "Please enter a number.";
    } 
    else{
        $phone_number = $input_phone_number;
    }
    
    // Validate info
    $input_info = trim($_POST["info"]);
    if(empty($input_info)){
        $info_err = "Please enter the info ";     
    } else{
        $info = $input_info;
    }

    // Validate logo
    $input_logo = trim($_FILES['image']['name']);
    if(empty($input_logo)){
        $logo_err = "Please chose the logo ";     
    } else{
        $logo = $input_logo;
    }
    
    // Check input errors before inserting in database
    if(empty($name_store_err) && empty($phone_number_err) && empty($info_err) &&  empty($logo_err)){
        // Prepare an insert statement

  	// image Path
  	$image_Path = "../img/re1/".basename($logo);

        $sql = "INSERT INTO stores (name_store, phone_number, info , logo) VALUES (:name_store, :phone_number, :info, :logo)";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name_store", $param_name_store);
            $stmt->bindParam(":phone_number", $param_phone_number);
            $stmt->bindParam(":info", $param_info);
            $stmt->bindParam(":logo", $param_logo);
            
            // Set parameters
            $param_name_store = $name_store;
            $param_phone_number = $phone_number;
            $param_info = $info;
            $param_logo = $logo;

            if (move_uploaded_file($_FILES['image']['tmp_name'], $image_Path)) {
                echo "Your Image uploaded successfully";
            }else{
                echo  "Not Insert Image";
            }

            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>

<?php

session_start();

if (!isset($_SESSION['adminname'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
?>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Create Record</h2>
                    <p>Please fill this form and submit to add store record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Store Name</label>
                            <input type="text" name="name_store" class="form-control <?php echo (!empty($name_store_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name_store; ?>">
                            <span class="invalid-feedback"><?php echo $name_store_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="tel" name="phone_number" class="form-control <?php echo (!empty($phone_number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone_number; ?>">
                            <span class="invalid-feedback"><?php echo $phone_number_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>info</label>
                            <textarea type="text" name="info" class="form-control <?php echo (!empty($info_err)) ? 'is-invalid' : ''; ?>"> <?php echo $info; ?></textarea>
                            <span class="invalid-feedback"><?php echo $info_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image"> 
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>