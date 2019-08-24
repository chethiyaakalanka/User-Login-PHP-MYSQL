<?php  

session_start();

// initializing thr variables

$username="";
$email="";
$password_1="";
$password_2="";
//$user_check_query;


//connect to the database


$db = mysqli_connect('localhost', 'root', '', 'user_regsys') or die ("Could not connect to the database");




//register users

$username= mysqli_real_escape_string($db, $_POST['username']);
$email= mysqli_real_escape_string($db, $_POST['email']);
$password_1= mysqli_real_escape_string($db, $_POST['password_1']);
$password_2= mysqli_real_escape_string($db, $_POST['password_2']);


//form validation

if(empty($username))  array_push($errors, "username is required");
if(empty($email))  array_push($errors, "Email is required");
if(empty($password_1)) array_push($errors, 'Password is required');
if($password_1 != $password_2) array_push($errors, 'password do not match');

//check for exsisting user names and emails

$user_check_query ="SELECT * FROM user WHERE username ='$username' or email ='$email' LIMIT 1";

$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user){
    if($user ['username'] ===$username) {array_push($errors, 'Username already exists');}
    if($email ['email'] ===$email) {array_push($errors, 'This email id already has a registered username');}


}


//Register the user if no errors

if(count($errors)==0){

$password = md5($password_1); //to encrypt the password
$query="INSERT INTO user(username, email, password) VALUES ('$username, $email, $password')";

mysqli_query($db, $query);
$_SESSION['username']=$username;
$_SESSION['success']="You are now logged in";

header('location: index.php');

}
































?>