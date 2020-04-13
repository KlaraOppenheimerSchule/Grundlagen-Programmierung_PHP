<?php $title = 'Rezeptüberblick' ?>

<?php ob_start() ?>
<h1>Überblick</h1>
<ul>
    <?php
        foreach ($this->recipes as $recipe): 
        ?>
    <li>
        <a href="index.php/?id=<?php echo $recipe->getId() ?>">
            <?php echo $recipe->getName()?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>

<a href="index.php/createRecipe"> Neues Rezept anlegen</a>

<?php $content = ob_get_clean() ?>

<?php include 'Layout.php' ?>