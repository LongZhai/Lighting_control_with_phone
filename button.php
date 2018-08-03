<html>
<body>
<title>Lingting Control</title>
<style type=text/css>
h1{
    color: white;
	position: absolute;
	top: 20;
	left: 520px;
}
h2{
    color: white;
	position: absolute;
	top: 100px;
	left: 450px;
}
#myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%; 
    min-height: 100%;
}

</style>
<video autoplay muted loop id="myVideo">
  <source src="bubble.mov" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<h1>Lighting Control</h1>


<?php
$file = "buttonStatus.txt";
$handle = fopen($file,'w+');
$switch_status="null";
if (isset($_POST['on']))
{
    $switch_status = "ON";
    fwrite($handle,$switch_status);
    fclose($handle);
}
else if(isset($_POST['off']))
{
    $switch_status = "OFF";
    fwrite($handle, $switch_status);
fclose($handle);

}
echo "<h2>The Device has been Turned $switch_status </h2>";
?>
</body>
</html>