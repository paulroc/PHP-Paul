<?php
print_r($_POST);


//boolean

if ($_POST['email'] == "") {
    echo "Sorry, geen toegang!";
    $_POST['email'] =false;
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>";
} else {
    if ($_POST['email'] == "piet@worldonline.nl") {
        $_POST['email'] =true;
        echo "welkom";

    }
    if ($_POST['email'] == "klaas@carpets.nl") {
        $_POST['email'] =true;
        echo "welkom";
    }
}
if ($_POST['email'] == "truushendriks@wegweg.nl") {
    $_POST['email'] =true;
    echo "welkom";
}


if ($_POST['wachtwoord'] == "") {
    echo "Sorry, geen toegang!";
    $_POST['wachtwoord'] =false;
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>";

} else {
    if ($_POST['wachtwoord'] == "doetje123") {
        $_POST['wachtwoord'] =true;
        echo "welkom";

    }
    if ($_POST['wachtwoord'] == "snoepje777") {
        $_POST['wachtwoord'] =true;
        echo "welkom";
    }
}
if ($_POST['wachtwoord'] == "arkiearkie201") {
    $_POST['wachtwoord'] =true;
    echo "welkom";
}
