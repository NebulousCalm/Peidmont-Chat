<!-- <meta http-equiv="refresh" content="1;"> -->
<title>Output</title>
<body>
  <div>
<?php 
$contents = (explode("\\n",file_get_contents("chat.txt")));

foreach ($contents as $content)
echo '<p class="text">' .$content. '</p>';
?>
  </div>
</body>