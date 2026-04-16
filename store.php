
<?php
$myfile = fopen("location.txt", "w")
$txt = "lat".$GET["lat"] . "\nlong:" . $_GET["Long"] . "\nIP: ".$_SERVER["REMOTE_ADDR"];
fwrite($myfile, $txt);
fclose($myfile);
  ?>
