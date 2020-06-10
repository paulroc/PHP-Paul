<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
<body>
<?php
$apen = array("aap1.jpg", "aap2.jpg", "app3.jpg", "aap4", "aap5");

foreach ($apen as $aap) {
    echo '<img src="img/'.$aap .'".$aap.">';
}
?>
</body>
</head>
</html>


