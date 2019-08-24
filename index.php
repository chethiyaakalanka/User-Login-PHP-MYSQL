<?php 
session_start();
    if(isset($_SESSION['username'])){
        $_SESSION['msg']="You must login first to view this page";
        header("location: login.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This is the home page</title>
</head>
<body>
    <?php if(isset($_SESSION['success'])); ?>
        <div>
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
<!-- -->
<?php endif; ?>
<!-- if user logged i print info about the account -->
<?php
    if(isset($_SESSION['username']));
?>
        <h3>Welcome <strong><?php echo $_SESSION['username'];?></strong></h3>
    <button>
        <a href="index.php?logout='1'"></a>
    </button>
<!-- -->
<?php endif; ?>
</body>
</html>