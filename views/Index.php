<?php
$dtls=file_get_contents('../model/Doctor.json');
$dtlsOK=json_decode($dtls);
?>
<body style="background-color:yellow;">
<center><h1 >Docotors all information</h1></center>
<div class="row">
<div class="col-md-12">
<?php foreach($dtlsOK as $ok)
echo "<div class=col-md-3
<h5>$ok->Serial</h5>
<h5>$ok->name</h5>
<h5>$ok->Designation</h5>
<h5>$ok->Degree</h5>
<h5>$ok->Email</h5>
<h5>$ok->Contact</h5>
</div>";



?>

</div>
</div>
