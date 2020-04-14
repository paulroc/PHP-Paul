<?php
print_r($_POST);

if ($_POST['voornaam']==""){
    echo "Je moet nog een naam invullen!";
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>a>";
};

if ($_POST['adres']==""){
    echo "Je moet nog een adres invullen!";
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>a>";
};
if ($_POST['email']==""){
    echo "Je moet nog een email invullen!";
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>a>";
};

if ($_POST['wachtwoord']==""){
    echo "Je moet nog een wachtwoord invullen!";
    echo "<br><a href=\"index.html\">Terug naar het Formulier</a>a>";
};
