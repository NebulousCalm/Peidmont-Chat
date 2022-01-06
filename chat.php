<!-- <meta http-equiv="refresh" content="1;"> -->
<title>Output</title> <!-- why do we need a title -->
<body>
  <div>
<?php 
$contents = (explode("\\n",file_get_contents("chat.dat")));

foreach ($contents as $content)
echo '<p class="text">' .$content. '</p>';
?>
  </div>
</body>