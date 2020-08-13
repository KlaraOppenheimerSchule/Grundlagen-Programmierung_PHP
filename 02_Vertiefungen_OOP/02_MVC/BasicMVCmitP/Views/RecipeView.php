<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kochbuch</title>
</head>

<body>

    <h1>Rezept <?php echo $recipe->getName() ?></h1>
    <br>
    <p>Zubreitungszeit: <?php echo $recipe->getZubereitungszeit() ?></p>
    <p>Anweisung: <?php echo $recipe->getAnweisung() ?></p>

    <a href="<?php echo DIRECTORY.'/index.php' ?>">Übersicht </a>
</body>

</html>