
<?php
$myfile = fopen("location.txt", "w")
$txt = "lat".$GET["lat"] . "\nlong:" . $_GET["Long"];
fwrite($myfile, $txt);
fclose($myfile);
  ?>
