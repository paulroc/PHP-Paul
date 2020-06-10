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
for ($i = -10 ; $i <= 40 ; $i++){
    calculateFahrenheitFromCelsius($i);
}

function calculateFahrenheitFromCelsius($celsius){
    $fahrenheit = $celsius * 1.8 +32;
    echo "{$celsius} degrees Celsius amounts to {$fahrenheit}";
}

    //$celcius = array("20","30","40","50");
    //$fahrenheit = array("68","86","104","122");
    //geefArrayWeerAlslijst($celcius);
    //geefArrayWeerAlslijst($fahrenheit);

    //function   geefArrayWeerAlslijst($arr){
        //foreach ($arr as $arr_element){
        //    echo "<li>".$arr_element."</li>";
   // }
    ?>

</ul>

</body>
</html>

