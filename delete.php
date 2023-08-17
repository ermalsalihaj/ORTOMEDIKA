<?php

require_once('modeli.php');
$dhena= new regjistrohu();


 if (isset($_GET['id'])){
    $dhena ->setId($_GET['id']);
    $myID=$dhena->getId();
    $dhena->deleteDhenat($myID);
 }
    ?>
