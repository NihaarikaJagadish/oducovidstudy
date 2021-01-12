<?php
session_start();
$email = strtolower($_POST["username"]);
$pass = $_POST["psw"];
console.log($email);
console.log($pass);
if($email == 'admin' && $pass == 'admin@123'){
    
    $_SESSION['id'] = "LoggedIn";
    header("Location: table.php"); 
}
else{
    echo '<script>alert("Wrong Credentials")</script>';
    header("Location: index.php");

}
?>


