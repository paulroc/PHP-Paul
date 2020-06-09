<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
    <style>
        div#kerstboom{
            text-align: center;
        }
    </style>

</head>
<body>
<div id="kerstboom">
    *<br>**<br>***<br>*****<br>******<br>
</div>
<?php
for($i = 0; $i<=5; $i++){
    echo '<div class="row"';
    for ($j = 0; $j<$i; $j++){
        echo "*";
    }
    echo "<br>";
}
?>
</body>

</html>


