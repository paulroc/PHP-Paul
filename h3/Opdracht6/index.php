<?php
?>

<!DOCTYPE html>
<html>
<head>
    <title>php opdracht</title>
    <style>

    </style>
</head>
<body>
<?php
define("FARE", 10);
define("SENIOR_AGE", 65);
define("SENIOR_DISCOUNT", 50);
define("JUIOR_AGE", 12);
define("JUNIOR_DISCOUNT", 50);
define("KIDS_AGE", 3);
define("KIDS_DISCOUNT", 100);



for ($i = 0 ; $i <= 80 ; $i++){
    $age = $i;
    if ($age >= SENIOR_AGE){
        $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
    }else if ($age < KIDS_AGE){
        $price = FARE * ((100 - KIDS_DISCOUNT) / 100);
    }else if ($age <= JUIOR_AGE){
        $price = FARE * ((100 - JUNIOR_DISCOUNT) / 100);
    }else if ($age > SENIOR_AGE){
        $price = FARE * ((100 - SENIOR_DISCOUNT) / 100);
    }else {
        $price = FARE;
    }
    echo 'Iemand van ' . $age . ' betaald ' . $price . ' euro.<br>';
}




?>
</body>
</html>
