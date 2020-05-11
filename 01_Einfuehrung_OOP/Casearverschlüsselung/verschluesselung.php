<?php

    require_once "Verschluesselungsmaschine.php";

    $meineVerschluesslungsmaschnine= new Verschluesselungsmaschine();

    //Prüfung noch einbauen
    if(!isset($_POST['verschluesselungsmethode']))
    {
        $verschluesselterText=$meineVerschluesslungsmaschnine->textVerschluesslen($_POST["text"], $_POST["verschluesselungswert"]);
        echo "<p>" . $verschluesselterText . "</p>";
    }
    else
    {
        $entschluesselterText=$meineVerschluesslungsmaschnine->textEntschluesslen($_POST["text"], $_POST["verschluesselungswert"]);
        echo "<p>" . $entschluesselterText . "</p>";
    }