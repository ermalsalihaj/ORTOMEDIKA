<?php
require_once ('./modelicontact.php');

if(isset($_GET['id'])){
    $kontaktiId = $_GET['id'];
}
$kontakti = new kontakti();
$kontakti->delete($kontaktiId);

?>