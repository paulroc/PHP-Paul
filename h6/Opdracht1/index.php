<?php

//$user="schoolphpuser";
//$pass="schoolphp";
//try {
// $dbh = new PDO('mysql:host=localhost;dbname=schoolphp;port=8889', $user, $pass);
// foreach($dbh->query('SELECT * from cursist') as $row) {
//     print_r($row);
// }
//  $dbh = null;
//} catch (PDOException $e) {
//   print "Error!: " . $e->getMessage() . "<br/>";
//   die();
//}
//$servername = "localhost";
//$username = "id13198768_paul";
//$password = "Fxg7sZaOosHtoG^d8c7t";

//try {
//  $conn = new PDO("mysql:host=$servername;dbname=Fxg7sZaOosHtoG^d8c7t", $username, $password);
// set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//} catch (PDOException $e) {
//  echo "Connection failed: " . $e->getMessage();

// $query = "SELECT * FROM cursist";
// $stmt = $conn->prepare($query) or die('Error Preparing.');
//  $stmt->execute() or die('Error executing');


// while ($data - $stmt->fetch()) {
//     echo $data['id'] . ' - ' . $data['cursistnr'] . ' - ' . $data['naam'] . ' - ' . $data['roepnaam'] . ' - ' . $data['straat'] . ' - ' . $data['postcode'] . ' - ' . $data['plaats'] . ' - ' . $data['geslacht'] . ' - ' . $data['geb_datum'] . '<br>';

//  }
//  $query = "SELECT * FROM cursus";
// $stmt = $conn->prepare($query) or die('Error Preparing.');
//  $stmt->execute() or die('Error executing');

// while ($data - $stmt->fetch()) {
//    echo $data['id'] . ' - ' . $data['curs_code'] . ' - ' . $data['curs_plts'] . ' - ' . $data['curs_dat'] . ' - ' . $data['omschr'] . ' - ' . $data['doc_code'] . ' - ' . $data['curs_prijs'] . '<br>';
//  }

// $query = "SELECT * FROM c_regel";
//  $stmt = $conn->prepare($query) or die('Error Preparing.');
//   $stmt->execute() or die('Error executing');

// while ($data - $stmt->fetch()) {
//     echo $data['id'] . ' - ' . $data['curs_code'] . ' - ' . $data['cursistnr'] . ' - ' . $data['cijfer'] . ' - ' . $data['betaald'] . '<br>';
//  }
// $query = "SELECT * FROM docent";
//$stmt = $conn->prepare($query) or die('Error Preparing.');
//   $stmt->execute() or die('Error executing');

//   while ($data - $stmt->fetch()) {
//      echo $data['id'] . ' - ' . $data['doc_code'] . ' - ' . $data['doc_naam'] . ' - ' . $data['straat'] . ' - ' . $data['postcode'] . ' - ' . $data['plaats'] . ' - ' . $data['telefoon'] . ' - ' . $data['uurloon'] . ' - ' . $data['geb_datum'] . '<br>';
//
// }
// print_r($_POST);


?>
    <!DOCTYPE html>
    <html>
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
        <tr>
            <td>cursistnr</td>
            <td>naam</td>
            <td>roepnaam</td>
            <td>straat</td>
            <td>postcode</td>
            <td>plaats</td>
            <td>geslacht</td>
            <td>geb_datum</td>
        </tr>
        <tr>
            <td>64</td>
            <td>Broeken</td>
            <td>Bram</td>
            <td>Drimmelseweg 8</td>
            <td>4395 XX</td>
            <td>Made</td>
            <td>M</td>
            <td>1988-03-24</td>
        </tr>
        <tr>
            <td>88</td>
            <td>Vos</td>
            <td>Henk</td>
            <td>Besbeemd 64</td>
            <td>4142 CE</td>
            <td>Oosterhout</td>
            <td>M</td>
            <td>1989-09-22</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Krimpen</td>
            <td>Tanja</td>
            <td>Tilburgseweg 2</td>
            <td>4222 BB</td>
            <td>Goirle</td>
            <td>V</td>
            <td>1990-02-08</td>
        </tr>
        <tr>
            <td>14</td>
            <td>Norbart</td>
            <td>Niels</td>
            <td>Gershof 8</td>
            <td>4841 PL</td>
            <td>Breda</td>
            <td>M</td>
            <td>1987-12-06</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>curs_code</td>
            <td>curs_plts</td>
            <td>curs_dat</td>
            <td>omschr</td>
            <td>doc_code</td>
            <td>curs_prijs</td>
        </tr>
        <tr>
            <td>DB3</td>
            <td>Breda</td>
            <td>1993-12-04</td>
            <td>Dbase III Plus</td>
            <td>WI</td>
            <td> 3300.00</td>
        </tr>
        <tr>
            <td>DB4</td>
            <td>Etten</td>
            <td>1993-12-11</td>
            <td>Dbase IV</td>
            <td>HM</td>
            <td>3600.00</td>
        </tr>
        <tr>
            <td>OA2</td>
            <td>Made</td>
            <td>1993-11-13</td>
            <td>Open Access 2.1</td>
            <td>PE</td>
            <td>2400.00</td>
        </tr>
        <tr>
            <td>OA3</td>
            <td>Breda</td>
            <td>1993-11-13</td>
            <td>Open Access 3.0</td>
            <td>GR</td>
            <td>2600.00</td>
        </tr>
        <tr>
            <td>FW</td>
            <td>Breda</td>
            <td>1993-11-20</td>
            <td>Framework</td>
            <td>WI</td>
            <td>850.00</td>
        </tr>
        <tr>
            <td>curs_code</td>
            <td>Breda</td>
            <td>1993-11-20</td>
            <td>Wordperfect</td>
            <td>GR</td>
            <td>1450.00</td>
        </tr>
        <tr>
            <td>NO</td>
            <td>Breda</td>
            <td>1993-12-06</td>
            <td>Normaliseren</td>
            <td>MO</td>
            <td>3000.00</td>
        </tr>
        <tr>
            <td>C++</td>
            <td>Made</td>
            <td>1993-11-27</td>
            <td>Programmeren in C++</td>
            <td>MO</td>
            <td>1450.00</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>curs_code</td>
            <td>cursistnr</td>
            <td>cijfer</td>
            <td>betaald</td>
        </tr>
        <tr>
            <td>DB3</td>
            <td>64</td>
            <td>8</td>
            <td>3300.00</td>
        </tr>
        <tr>
            <td>DB3</td>
            <td>2</td>
            <td>6</td>
            <td></td>
        </tr>
        <tr>
            <td>DB3</td>
            <td>68</td>
            <td>9</td>
            <td>3300.00</td>
        </tr>
        <tr>
            <td>OA2</td>
            <td>14</td>
            <td>5</td>
            <td>2400.00</td>
        </tr>
        <tr>
            <td>OA2</td>
            <td>88</td>
            <td>7</td>
            <td>2000.00</td>
        </tr>
        <tr>
            <td>OA2</td>
            <td>2</td>
            <td>9</td>
            <td></td>
        </tr>
        <tr>
            <td>DB4</td>
            <td>14</td>
            <td>6</td>
            <td>3600.00</td>
        </tr>
    </table>
    <br>
    <table>
        <tr>
            <td>doc_code</td>
            <td>doc_naam</td>
            <td>straat</td>
            <td>postcode</td>
            <td>plaats</td>
            <td>telefoon</td>
            <td>uurloon</td>
            <td>geb_datum</td>
        </tr>
        <tr>
            <td>WI</td>
            <td>Witlok</td>
            <td>Madeseweg 8</td>
            <td>4841 PT</td>
            <td>Oosterhout</td>
            <td>071-123378</td>
            <td>100.00</td>
            <td>1957-04-25</td>
        </tr>
        <tr>
            <td>HM</td>
            <td>Hooymayers</td>
            <td>Ignatiusstr 6</td>
            <td>4847 EZ</td>
            <td>Breda</td>
            <td>076-442786</td>
            <td>200.00</td>
            <td>1952-09-01</td>
        </tr>
        <tr>
            <td>GR</td>
            <td>Grond</td>
            <td>Bolwerk 10</td>
            <td>4541 CC</td>
            <td>Tilburg</td>
            <td>013-426786</td>
            <td>150.00</td>
            <td>1958-10-25</td>
        </tr>
        <tr>
            <td>PE</td>
            <td>Peters</td>
            <td>Breedonk 64</td>
            <td>4142 EC</td>
            <td>Oosterhout</td>
            <td>01620-3429</td>
            <td>185.50</td>
            <td>1963-10-08</td>
        </tr>
        <tr>
            <td>SE</td>
            <td>Sengers</td>
            <td>Bredaseweg 2</td>
            <td>4344 DE</td>
            <td>Bavel</td>
            <td></td>
            <td>110.00</td>
            <td>1955-05-17</td>
        </tr>
        <tr>
            <td>MO</td>
            <td>Mol</td>
            <td>Waterstr 8</td>
            <td>4841 KA</td>
            <td>Breda</td>
            <td>076-227788</td>
            <td>300.00</td>
            <td>1948-11-30</td>
        </tr>
    </table>

    </body>
    </html>
<?php

//boolean

if ($_POST['email'] == "") {
    echo "Sorry, geen toegang!";
    $_POST['email'] = false;
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>";
} else {
    if ($_POST['email'] == "piet@worldonline.nl") {
        $_POST['email'] = true;
        echo "welkom";

    }
    if ($_POST['email'] == "klaas@carpets.nl") {
        $_POST['email'] = true;
        echo "welkom";
    }
}
if ($_POST['email'] == "truushendriks@wegweg.nl") {
    $_POST['email'] = true;
    echo "welkom";
}


if ($_POST['wachtwoord'] == "") {
    echo "Sorry, geen toegang!";
    $_POST['wachtwoord'] = false;
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>";

} else {
    if ($_POST['wachtwoord'] == "doetje123") {
        $_POST['wachtwoord'] = true;
        echo "welkom";

    }
    if ($_POST['wachtwoord'] == "snoepje777") {
        $_POST['wachtwoord'] = true;
        echo "welkom";
    }
}
if ($_POST['wachtwoord'] == "arkiearkie201") {
    $_POST['wachtwoord'] = true;
    echo "welkom";

}

