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
    for ($i = -10; $i <= 30; $i++) {

        $janee = checkIfDivsibleBy3($i) ? " " : " niet ";
        echo "{$i} is {$janee}deelbaar door 3. <br>";


    }

    function checkIfDivsibleBy3($number)
    {
        return $number % 3 === 0;
    }


    ?>

</ul>

</body>
</html>
