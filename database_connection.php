<?php
$servername = "handson-mysql";
$username = "kumar";
$password = "kumar";
$dbname = "OduCovidStudy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
}

$first_name = mysqli_real_escape_string($link, $_REQUEST['name']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['phoneNumber']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$submission_id = $_POST["last_name"] . ' ' . $_POST["phone"]; 
$name = $_POST["first_name"] . ' ' . $_POST["last_name"];
$sql = "INSERT INTO Responses (submission_id,name,email,gender,age,phone,message)
    VALUES ('".$submission_id ."','".$name ."','".$_POST["email"]."' ,'".$_POST["gender"]."' ,'".$_POST["age"]."' ,'".$_POST["phone"]."' ,'".$_POST["message"]."')";



if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<html>
    <title>
        ODU Covid Study
    </title>
    <head>
      <style>
        lottie-player{
          display: block;
  margin-left: auto;
  margin-right: auto;
  width: 40%;
        }
        h1{
          text-align: center;
        }

        * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #555555;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}
.topnav input[type=password] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}


.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
      </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    </head>
    <centre>
    <div class="topnav">
  <a class="active" href = "index.php">ODU Covid Study</a>
  <a href="index.php">Register</a>
  <div class="login-container">
    <form action="login.php" method = "post">
      <input type="text" placeholder="Username" name="username">
      <input type="password" placeholder="Password" name="psw">
      <button type="submit">Login</button>
    </form>
  </div>
</div>
      <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_zbVEXs.json"  background="transparent"  speed="0.5"  style="width: 1000px; height: 700px;"  loop  autoplay></lottie-player>
      <h1>We Will Get Back To You!</h1>
  </centre>
    
</html>

