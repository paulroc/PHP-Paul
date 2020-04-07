<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewpoint" content="width=device-width, initial-scale=width">
<title>PHP opdracht</title>
    <style>
        table, tr, td {
            border: solid black 1px;
            border-collapse: collapse;
        }
        td {
            padding: 10px;
        }
        img {
            width: 25px;
            margin-right: 5px;
        }
        td.plaatjes {
            border: solid white 1px;
        }
    </style>
</head>
<body>

<table>



<?php
$zwemclubs = array(
    "de spartelkuikens" => 25,
    "de waterbuffels" => 32,
    "plonsmderin" => 11,
    "bommetje" => 23
);

foreach ($zwemclubs as $clubnaam => $zwemmers) {

    echo '<tr>';

    echo "<td>$clubnaam</td>";

    echo "<td>$zwemmers</td>";

    echo '<td class="plaatjes">';
    $plaatjes = floor($zwemmers /5);
    for ($i = 0 ; $i < $plaatjes ; $i++){
      echo '<img src="img/swim-864383_640.jpg" alt="plaatje">';
    }
    echo '</td>';

    echo '</tr>';
}
?>

</table>

</body>
</html>