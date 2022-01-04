<!DOCTYPE html>
<html>
<head>
  <title>Sus-Chat-Beta</title>
  <noscript>If you are seeing this it means you don't have javascript please enable it</noscript>
  <link rel="stylesheet" href="./styles/main.css">
  <link rel="stylesheet" href="./styles/register.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script defer src="./javascript/open-close.js"></script>
  <script defer src="./javascript/main.js"></script>
  <script>
  $(function() {
    function refreshIFrame() {
      setTimeout(function() {
        $('#iFrame').attr('src', $('#iFrame').attr('src'));
        $('#chatLog').html( $('#iFrame').contents().find('body').find('div').html() );
        refreshIFrame();
      }, 2000);    
    }
    refreshIFrame();
  });
  </script>
</head>
<body>
<!-- Sidenav for navigating preferences and settings -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <p class="a">Logout</p>
  <p class="a">Themes</p>
  <p class="a">Preferences</p>
  <p class="a">Contact Us</p>
  <p class="a">About</p>
  <p class="a" id="openChatBot">Chat Bot</p>
</div>

<button onclick="openNav()">Sidenav open</button>
<div id="main">
</div>

<form method="post">
  <input type="text" name="user" placeholder="user"><br>
  Enter Your Text Here:<br>
  <input type="text" name="input"><br>
  <input type="submit" name="submit">
</form>
<!-- The Modal -->
<div id="myModal" class="modal">

  <div class="chatbot-container" id="chatbot-modal">
    <span class="close">&times;</span>
    <h1 class="header" id="chatbot-modal">Chat Bot</h1>
    <hr id="chatbot-modal">
    <p id="chatbot-modal">Coming Soon</p>
    <p id="chatbot-modal">(Or Never)</p>
  </div>
</div>

<div id="chatLog"></div>
<iframe src="chat.php" id="iFrame"></iframe>

<!--
<div class="container">
  <h1 class="header">Login</h1><br>
  <h2 class="header">Sign Into Your Account</h2>
  <input class="username" id="username()" type="text" placeholder="Username"><br><br>
  <input class="password" id="password()" type="password" placeholder="Password"><br><br>
  <a href="index.html"><button class="login" id="logIn()" type="submit">Log In</button></a>
  <p>Don't have an account? Create one <a href="register.php">here</a>.</p>
</div> -->
</body>
</html>
<!-- Zach's PHP script -->
<?php
              
if(isset($_POST['input']))
{
$data=htmlspecialchars($_POST['input']);

$user = $_POST['user'];

# $output='<p class="text">' .$user.'' .$data. '</p>';
$output= $user.': ' .$data. '\\n';

$fp = fopen('chat.txt', 'a');

fwrite($fp, $output);
fclose($fp);
}
?>