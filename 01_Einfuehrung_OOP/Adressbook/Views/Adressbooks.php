<?php $title = 'Title' ?>

<?php ob_start() ?>

<h1> Adressbücher </h1>
<ul>
    <li> <a href="index.php/?adressbook=private">Privates Adressbuch</a> </li>
    <li> <a href="index.php/?adressbook=business">Geschäftliches Adressbuch</a> </li>
</ul>

<?php $content = ob_get_clean() ?>

<?php include 'Layout.php' ?>