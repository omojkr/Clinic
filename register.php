<?php
include 'db.php';

if(isset($_POST['reg_user'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $phone_number = mysqli_real_escape_string($con, $_POST['phone_number']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);

if(empty($username)){
    $error="Username is required!";
}
elseif (empty($phone_number)){
    $error="Phone number is required!";
}
elseif (empty($email)){
    $error="Email is required!";
}
elseif ($password_1 != $password_2){
    $error="Password does not match";
}
elseif(strlen($username)<5 || strlen($username)> 30){
    $error="Username must be between 5 to 30 Characters";
}
elseif(strlen($password_1) <6){
    $error="Password must be atleast 6 characters";
}
else{
    $check_email = "SELECT*FROM users WHERE email='$email'";
    $data = mysqli_query($con,$check_email);
    $result = mysqli_fetch_array($data);
    if($result>0){
        $error="Email already exist";
    }
else{
    $password_1 = ($password_2);
    $insert = "INSERT INTO users (username, phone_number, email, password_1, password_2) 
    VALUES ('$username', '$phone_number', '$email', '$password_1', '$password_2')";
    $q = mysqli_query($con, $insert);
    if($q){
        $success = "Your account has been created successfully!";
    }
}
}
}



?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="javascript" type="text/javascript">
window.history.forward();
</script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register</title>

     <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

     <!-- Custom styles for this template-->
         <link href="login1.css" rel="stylesheet">
         
</head>

<body>
    <div class="hero">
        <div class="form-box">
        <br><p style="color:red">
            <?php 
                if(isset($error)){
                    echo $error;
                }
            ?>
              
        </p>
        <p style="color:green">
            <?php 
                if(isset($success)){
                    echo $success;
                }
            ?>
              
        </p>

            <form method="post" action="" id="regis" autocomplete="off" class="input-group">
            <img class="logo" src="logo.jpg"><br><br><br><br><br><br><br>
            <input type="text" class="input-field" placeholder="Enter Username" id="username" name="username"  value="<?php 
                if(isset($error)){
                    echo $username;
            } ?>"><hr>
            <input type="text" class="input-field" placeholder="Enter Phone Number" id="phone_number" name="phone_number"  value="<?php 
                if(isset($error)){
                    echo $phone_number;
            } ?>"><hr>
            <input type="email" class="input-field" placeholder="Enter Email" id="email" name="email"  value="<?php 
                if(isset($error)){
                    echo $email;
            } ?>"><hr>
            <input type="text" class="input-field" placeholder="Enter Password" id="password_1" name="password_1"  value=""><hr>
            <input type="text" class="input-field" placeholder="Confirm Password" id="password_2" name="password_2"  value=""><hr>
            <input type="checkbox" class="chech-box" required><span> I agree to the terms & conditions </span>
            <br><br><button type="submit" class="submit-btn" name="reg_user"> Register </button>
            <br><a href="login.php" class="notice"> Already Have an Account? Login. </a>
            </form>
            
        </div>
    </div>

</body>
</html>