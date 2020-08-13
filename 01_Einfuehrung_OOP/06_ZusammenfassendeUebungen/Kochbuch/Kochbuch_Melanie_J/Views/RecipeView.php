<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kochbuch</title>
</head>

<body>

    <h1>Rezept <?php echo $recipe->getName()."<br>"  ?></h1>
        <?php echo $recipe->getCookingTime()."<br>"   ?>
                <?php echo $recipe->getInstruction()."<br>"  ?>
                <?php echo $recipe->getIngredients()."<br>"   ?>
                <?php echo $recipe->getStroveInstruction()."<br>"   ?>
                <?php echo $recipe->getOfenInstruction()."<br>"."<br>"    ?>
    <a href="<?php echo VERZEICHNIS.'/index.php'  ?>">Übersicht </a>
</body>

</html>