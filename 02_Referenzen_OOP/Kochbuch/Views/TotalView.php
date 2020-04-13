<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kochbuch</title>
</head>

<body>

    <h1>Überblick</h1>
    <ul>
        <?php
        foreach ($this->recipes as $recipe): 
        ?>
        <li>

            <a href="index.php/?id=<?php echo $recipe->getId() ?>">
                <?php echo $recipe->getName()  ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>