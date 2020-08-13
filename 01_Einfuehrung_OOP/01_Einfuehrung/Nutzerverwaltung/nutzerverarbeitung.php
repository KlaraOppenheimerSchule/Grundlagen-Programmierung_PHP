<html>

<body>
    <?php
    /* Nutzer bei Aufruf erzeugen */
    require_once "Nutzer.php";
    
    $nutzer = new Nutzer($_POST["vorname"],$_POST["nachname"]);
    echo $nutzer->getVorname() . $nutzer->getNachname();
    ?>
</body>

</html>