<?php
 include_once "connection.php";
 //connection           #(variable)
 $conn = new mysqli($servername, $username, $password, $database);

if($conn ->connect_error){
    die ("error" . $conn ->connect_error);
    echo "erpr";
}else{
    echo "connection success";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>System</title>
</head>
<body>
            <div id="login_container">
                <form id="loginform">
                    <h1>Login</h1>
                        <label>Username: </label>
                        <input type="text" name = "username">
                        <label>Password : </label>      
                        <input id="password" type="password" name = "password">
                      
                        <div>
                         <button id="loginsubmit" type="submit">Login</button>
                         <button id="register" type="button">create account</button>
                        </div>
                </form>
            </div>
  
            
            
            <div method="post" action="index.php" id="register_container" style = "display: none;">
                <form id="registerform">
                    <h1>Register</h1>
                        <label>Username: </label>
                        <input type="text" name = "username" required>
                        <label>Password : </label>      
                        <input id="password" type="password" name = "password" required>
                        <label>Number : </label>      
                        <input id="password" type="text" name = "number" required>
                      
                        <div>
                         <button id="login" type="button">back to login</button>
                         <button id="registersubmit" type="submit">register</button>
                        </div>
                </form>
            </div>

<script src="index.js"></script>
</body>
</html>
