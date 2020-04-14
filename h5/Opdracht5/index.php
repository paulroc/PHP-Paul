<?php
print_r($_POST);

echo "<img src'img/apen/".$_POST['apen'].".jpg'>";

print_r($_POST['apen']);

foreach ($_POST['apen']as $aap){
    echo "<img/apen/".$aap.".jpg'>";
}