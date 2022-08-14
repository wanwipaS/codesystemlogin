<?php 
    session_start();
    include('server.php');// เชื่อมกันของไฟล์ รวม//;
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class ="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php"  method="post">
        <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>  

        <div class="input-group">
            <lable for = " username">Username</lable>
            <input type ="text" name ="username">
        </div>
        <div class="input-group">
            <lable for = "password">Password</lable>
            <input type ="password" name ="password">
        </div>
        <div class="input-group">
                <button type ="submit" name = "login_user" class ="btn">Login</button>
        </div>
        <p>Not yet a member? <a href = "register.php">Sign Up</a></p>
    </form>
</body>
</html>