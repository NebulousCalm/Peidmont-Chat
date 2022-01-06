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
  <script defer src="./javascript/name.js"></script>
  <script defer src="./javascript/cookies.js"></script>
  <script>
  // iframe refresh
  $(function() {
    function refreshIFrame() {
      setTimeout(function() {
        $('#iFrame').attr('src', $('#iFrame').attr('src'));
        $('#chatLog').html( $('#iFrame').contents().find('body').find('div').html() );
        refreshIFrame();
      }, 1000);    
    }
    refreshIFrame();
  });
  </script>
</head>
<body onload="checkCookie()">
<!-- Sidenav for navigating preferences and settings -->
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="./TermsOfService/" class="a">Terms of Service</a>
  <p class="a">Contact Us</p>
  <a href="./About/" class="a">About</a>
  <p class="a" id="openChatBot">Chat Bot</p>
</div>

<!--<button onclick="openNav()">Open Navigation</button>-->
<div id="main">
</div>

<!-- form -->
<form class="input-form text" method="post">
  <input type="text" name="user" placeholder="user" id="name" readonly><br>
  <br>
  <input type="text" name="input" placeholder="Enter a message" required>
  <input type="submit" name="Send">
</form>
<!-- chatbot -->
<div id="myModal" class="modal">

  <div class="chatbot-container" id="chatbot-modal">
    <span class="close">&times;</span>
    <h1 class="header" id="chatbot-modal">Chat Bot</h1>
    <hr id="chatbot-modal">
    <p id="chatbot-modal">Coming Soon</p>
    <p id="chatbot-modal">(Or Never)</p>
  </div>
</div>
<!-- chat iframe -->
  <div id="chatLog"></div>
  <iframe src="chat.php" id="iFrame"></iframe>
</body>
</html>
<!-- Zach's PHP script -->
<?php

if(isset($_POST['input'])) {
  $filename = "./chat.dat";
  $data = htmlspecialchars($_POST['input']);
  $user = $_POST['user'];

  # $output='<p class="text">' .$user.'' .$data. '</p>';
  $output= $user.': ' .$data. '\\n';
  $file_contents = file_get_contents($filename);
  # $fp = fopen('chat.txt', 'a');
  # fwrite($fp, $output);
  # fclose($fp);
  $content = $output . $file_contents;
  file_put_contents($filename, $content);  
}
?>