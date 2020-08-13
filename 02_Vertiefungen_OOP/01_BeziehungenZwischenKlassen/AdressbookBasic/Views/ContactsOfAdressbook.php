<?php $title = 'Title' ?>

<?php ob_start() ?>

<h1> Adressen von <?php echo $this->adressbook->getName(); ?> </h1>

<?php
    $contacts=$this->adressbook->getContacts();
    foreach($contacts as $contact)
    {
        echo $contact->getName() . "</br>";
        echo $contact->getPhone() . "</br>";;
        echo "------------------ </br>";   
    }
?>

<?php $content = ob_get_clean() ?>

<?php include 'Layout.php' ?>