<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body>

    <div class="container">
       
        <div class="header">
            <h2>Login</h2>
        
        <form action="login.php" method="post">
         <div>
            <label form="username">Username : </label>
            <input type="text" name="username" required>
        </div>
        <div>
                <label form="password">Password : </label>
                <input type="password" name="password_1" required>
        </div>
        

        <button typr="submit" name="login_user">login</button>

        <p>Not a user? <a href="registration.php"><b>Register</b></a></p>


        </form>
        
        </div>
    </div>
    
</body>
</html>