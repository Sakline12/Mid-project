<!DOCTYPE html>
<html>
<body>
<?php
$file=fopen("../model/Staff information.txt","r")or die ("Unable to open file");
while(!feof($file))
{
 echo fgets($file)."<br>";
}
fclose($file);

?>
</body>
</html>