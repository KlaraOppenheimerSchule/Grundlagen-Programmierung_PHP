<?php $title = 'Rezeptüberblick' ?>

<?php ob_start() ?>

<h1>Neues Rezept anlegt</h1>
<a href="<?php echo DIRECTORY.'/index.php' ?>">Übersicht </a>


<?php $content = ob_get_clean() ?>

<?php include 'Layout.php' ?>