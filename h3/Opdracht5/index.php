<?php
?>


<!DOCTYPE html>
<html>
<head>
    <title>PHP opdrachten</title>
    <style>
        body{
            text-align: center;
        }
        img{
            width: 200px;
        }
        img:nth-child(even) {
            border: solid 2px red;
        }
        img:nth-child(odd) {
            border: solid 2px green;
        }

    </style>
</head>
<body>

<?php
//for ($i = 1; $i <= 9; $i++) {

  //  $borderColor = ($i % 2 == 0) ? "red" : "green";

    //echo '<img class ="">"' . $borderColor . '-border" src="apen/aap' . $i . '.jpg" alt="aap ' . $i . '">';
    echo '<img src="apen/aap1.jpg">' ;
    echo '<img src="apen/aap2.jpg">' ;
    echo '<img src="apen/aap3.jpg">' ;
    echo '<img src="apen/aap4.jpg">' ;
    echo '<img src="apen/aap5.jpg">' ;
    echo '<img src="apen/aap6.jpg">' ;
    echo '<img src="apen/aap7.jpg">' ;
    echo '<img src="apen/aap8.jpg">' ;
    echo '<img src="apen/aap9.jpg">' ;

//}
?>

</body>
</html>


