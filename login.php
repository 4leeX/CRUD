<?php

if(isset($_POST['submit'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if($connection) {
    echo "We are connected";
} else {
    die("Database connection failed");
}







    
    // if($username && $password) {
    //     echo $username;
    //     echo $password;
    // } else {
    //     echo "NO";
    // }




}





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>      
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div> 

            <input type="submit" class="btn btn-primary" type="submit" name="submit" value="Submit">

        </form>
    </div>

</div>



    
</body>
</html>