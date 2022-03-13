<!DOCTYPE html>
<html>
<body>
<?php
$file=fopen("../model/No write.txt","r")or die ("Unable to open file");
while(!feof($file))
{
 echo fgets($file)."<br>";
}
fclose($file);

?>
<a href="../views/Sucessful.php">
<button><h5 style="color:red">Send</h5></button>
</a>
</body>
</html>