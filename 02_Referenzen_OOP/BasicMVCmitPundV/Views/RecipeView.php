<?php $title = 'Rezeptüberblick' ?>

<?php ob_start() ?>
<h1>Rezept <?php echo $recipe->getName() ?></h1>
<br>
<p>Zubreitungszeit: <?php echo $recipe->getZubereitungszeit() ?></p>
<p>Anweisung: <?php echo $recipe->getAnweisung() ?></p>

<a href="<?php echo DIRECTORY.'/index.php' ?>">Übersicht </a>

<a href="index.php/createRecipe"> Neues Rezept anlegen</a>

<?php $content = ob_get_clean() ?>

<?php include 'Layout.php' ?>