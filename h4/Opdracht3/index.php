<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=width">
    <title>PHP opdracht</title>
    <style>

    </style>
</head>
<body>

<ul>

    <?php
    $string = array("a","b","c","d");
    shuffle($string);
    geefArrayWeerAlslijst($string);

    function   geefArrayWeerAlslijst($arr){
        foreach ($arr as $arr_element){
            echo "<li>".$arr_element."</li>";
        }
    }
    ?>

</ul>

</body>
</html>

