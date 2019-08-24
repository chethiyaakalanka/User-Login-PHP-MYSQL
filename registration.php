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
            <h2>Registration</h2>
       
        <form action="registration.php" method="post">
        <?php include('errors.php') ?>
         <div>
            <label form="username">Username : </label>
            <input type="text" name="username" required>
        </div>

        <div>
                <label form="email">Email : </label>
                <input type="email" name="email" required>
        </div>
        <div>
                <label form="password">Password : </label>
                <input type="password" name="password_1" required>
        </div>
        <div>
                <label form="password">Confirm Password : </label>
                <input type="password" name="password_2" required>
        </div>

        <button typr="submit" name="reg_user">Submit</button>

        <p>Already a user? <a href="login.php"><b>Login</b></a></p>


        </form>
        
        </div>
    </div>
    
</body>
</html>