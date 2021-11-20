<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name_store = $phone_number = $info = "";
$name_store_err = $phone_number_err = $info_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name_store
    $input_name_store = trim($_POST["name_store"]);
    if(empty($input_name_store)){
        $name_store_err = "Please enter a name_store.";
    } elseif(!filter_var($input_name_store, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_store_err = "Please enter a valid name_store.";
    } else{
        $name_store = $input_name_store;
    }
    
    // Validate phone_number phone_number
    $input_phone_number = trim($_POST["phone_number"]);
    if(empty($input_phone_number)){
        $phone_number_err = "Please enter an phone_number.";     
    } else{
        $phone_number = $input_phone_number;
    }
    
    // Validate info
    $input_info = trim($_POST["info"]);
    if(empty($input_info)){
        $info_err = "Please enter the info amount.";     
    } elseif(!ctype_digit($input_phone_number)){
        $phone_number_err = "Please enter a number.";
    }  else{
        $info = $input_info;
    }
    
    // Check input errors before inserting in database
    if(empty($name_store_err) && empty($phone_number_err) && empty($info_err)){
        // Prepare an update statement
        $sql = "UPDATE store SET name_store=:name_store, phone_number=:phone_number, info=:info WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":name_store", $param_name_store);
            $stmt->bindParam(":phone_number", $param_phone_number);
            $stmt->bindParam(":info", $param_info);
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_name_store = $name_store;
            $param_phone_number = $phone_number;
            $param_info = $info;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
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
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM store WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":id", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $name_store = $row["name_store"];
                    $phone_number = $row["phone_number"];
                    $info = $row["info"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
        
        // Close connection
        unset($pdo);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Update Record</h2>
                    <p>Please edit the input values and submit to update the store record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label>name</label>
                            <input type="text" name="name_store" class="form-control <?php echo (!empty($name_store_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name_store; ?>">
                            <span class="invalid-feedback"><?php echo $name_store_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>phone</label>
                            <input type="tel" name="phone_number" class="form-control <?php echo (!empty($phone_number_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $phone_number; ?>">
                            <span class="invalid-feedback"><?php echo $phone_number_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>info</label>
                            <textarea type="text" name="info" class="form-control <?php echo (!empty($info_err)) ? 'is-invalid' : ''; ?>"> <?php echo $info; ?></textarea>
                            <span class="invalid-feedback"><?php echo $info_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>