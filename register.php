<!DOCTYPE html>
<head>
<link rel="stylesheet" href="./styles/register.css">
<script src="./javascript/register.js"></script>
<title>Register</title>
</head>
<body>
<form onsubmit="register(this)">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill out this form to create an account</p>
    <hr>

    <input type="text" name="email" placeholder="Enter Email (Optional)" id="email"><br><br>

    <input type="password" placeholder="Enter Password" id="psw" name="password" required><br><br>

    <input type="password" placeholder="Repeat Password" id="psw-repeat" name="password-repeat" required><br><br>

    <input type="text" placeholder="Handle" id="handle" name="handle" required><br>
    <hr>

    <p>By creating an account you agree to our <a href="ToS.html" target="_blank">Terms of Service</a>.</p>
    <button type="submit" class="registerbtn" method="POST" onclick="register()" name="submit" required>Register</button>

    <div class="container signin">
      <p>Already have an account? <a href="./signin.php">Sign In</a></p>
    </div>
  </div>
  </form>
</body>

<?php
                
if(isset($_POST['submit']))
{
$handle=htmlspecialchars($_POST['handle']);

$email = $_POST['email'];

$psw = $_POST['password'];

$pswRepeat = $_POST['password-repeat'];

# $output='<p class="text">' .$user.'' .$data. '</p>';
$output= $handle.': ' .$email. ', ' . '\\n';

$fp = fopen('register.csv', 'a');

fwrite($fp, $output);
fclose($fp);
}
?>