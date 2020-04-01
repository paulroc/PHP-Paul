<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
<body>
<?php
$bomen = array("img_0050.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_Kandal.jpg");

foreach ($bomen as $boom) {
    echo "<img src='img/bomen/".$boom."'>";
}
?>
</body>
</head>
</html>


