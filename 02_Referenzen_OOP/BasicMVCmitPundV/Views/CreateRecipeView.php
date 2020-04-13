<?php $title = 'Neues Rezept anlegen' ?>

<?php ob_start() ?>

<h1>Neues Rezept anlegen</h1>
<form action="saveRecipe" method="post">
    <p><input name="name" /> Rezeptname </p>
    <p><input name="zubereitungszeit" /> Zubereitungszeit </p>
    <p><input name="anweisung" /> Anweisung </p>
    <p><input type="submit" />
</form>

<?php $content = ob_get_clean() ?>

<?php include 'Layout.php' ?>