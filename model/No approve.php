<!DOCTYPE html>
<html>
<head>
<title>Send message</title>
</head>
<body>
<center><h1>Send message</h1></center>

<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Shuvo</to>
<from>Ratul</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
//print_r($xml);
echo "<br>".$xml->to;
?><br>
<a href="../views/Not selected.php">
<button><h5 style="color:red">Send message</h5></button>
</a>

<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Shuvo</to>
<from>Ratul</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
//print_r($xml);
echo "<br>".$xml->from;
?><br>
<a href="../views/Not selected.php">
<button><h5 style="color:red">Send message</h5></button>
</a>




</body>
</html>