<html>

<body>
    <?php
    /* Mitarbeiter bei Aufruf erzeugen */
    require_once "Mitarbeiter.php";
    $ma = new Mitarbeiter($_POST["vorname"],$_POST["nachname"]);
    echo $ma->getVorname() . $ma->getNachname();
    ?>
</body>

</html>