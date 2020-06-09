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
$servername = "localhost";
$username = "id13198768_paul";
$password = "Fxg7sZaOosHtoG^d8c7t";

try {
    $conn = new PDO("mysql:host=$servername;dbname=Fxg7sZaOosHtoG^d8c7t", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();

    $query = "SELECT * FROM cursist";
    $stmt = $conn->prepare($query) or die('Error Preparing.');
    $stmt->execute() or die('Error executing');

    $data =apc_fetch();
    while ($data - $stmt->fetch()) {
        echo $data['id'] . ' - ' . $data['cursistnr'] . ' - ' . $data['naam'] . ' - ' . $data['roepnaam'] . ' - ' . $data['straat'] . ' - ' . $data['postcode'] . ' - ' . $data['plaats'] . ' - ' . $data['geslacht'] . ' - ' . $data['geb_datum'] . '<br>';

    }
    $query = "SELECT * FROM cursus";
    $stmt = $conn->prepare($query) or die('Error Preparing.');
    $stmt->execute() or die('Error executing');

    while ($data - $stmt->fetch()) {
        echo $data['id'] . ' - ' . $data['curs_code'] . ' - ' . $data['curs_plts'] . ' - ' . $data['curs_dat'] . ' - ' . $data['omschr'] . ' - ' . $data['doc_code'] . ' - ' . $data['curs_prijs'] . '<br>';
    }

    $query = "SELECT * FROM c_regel";
    $stmt = $conn->prepare($query) or die('Error Preparing.');
    $stmt->execute() or die('Error executing');

    while ($data - $stmt->fetch()) {
        echo $data['id'] . ' - ' . $data['curs_code'] . ' - ' . $data['cursistnr'] . ' - ' . $data['cijfer'] . ' - ' . $data['betaald']  . '<br>';
    }
    $query = "SELECT * FROM docent";
    $stmt = $conn->prepare($query) or die('Error Preparing.');
    $stmt->execute() or die('Error executing');

    while ($data - $stmt->fetch()) {
        echo $data['id'] . ' - ' . $data['doc_code'] . ' - ' . $data['doc_naam'] . ' - ' .  $data['straat'] . ' - ' . $data['postcode'] . ' - ' . $data['plaats'] . ' - ' . $data['telefoon'] . ' - ' .$data['uurloon'] . ' - ' . $data['geb_datum'] . '<br>';

    }
    print_r($_POST);


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
}

