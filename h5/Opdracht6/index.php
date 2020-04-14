<?php
print_r($_POST);


if ($_POST['email'] == "") {
    echo "Sorry, geen toegang!";
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>";
} else {
    if ($_POST['email'] == "piet@worldonline.nl") {
        echo "welkom";

    }
    if ($_POST['email'] == "klaas@carpets.nl") {
        echo "welkom";
    }
}
if ($_POST['email'] == "truushendriks@wegweg.nl") {
    echo "welkom";
}


if ($_POST['wachtwoord'] == "") {
    echo "Sorry, geen toegang!";
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>";

} else {
    if ($_POST['wachtwoord'] == "doetje123") {
        echo "welkom";

    }
    if ($_POST['wachtwoord'] == "snoepje777") {
        echo "welkom";
    }
}
if ($_POST['wachtwoord'] == "arkiearkie201") {
    echo "welkom";
}

