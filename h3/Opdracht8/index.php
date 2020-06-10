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
    </style>
</head>
<body>

<table>


    <?php
    $kappersagenda = array(
        "INDEX" => "WAARDE",
        "9.15" => "Mevr. Pietersen",
        "9.30" => "Mevr. Willems",
        "9.45" => " ",
        " 10.00" => "Paul van den Broek",
        "10.15" => "Karel de Meeuw",
        "10.30" => " ",
    );

    print ("De volgende momenten zijn nog beschikbaar: <ul>");
    foreach ($kappersagenda as $tijd => $afspraak) {
        if ($afspraak == " "){
            print ("<li>" . $tijd . "</li>");
        }



        echo '<tr>';

        echo "<td>$tijd</td>";

        echo "<td>$afspraak</td>";


        echo '</td>';

        echo '</tr>';
    }
    ?>

</table>

</body>
</html>

