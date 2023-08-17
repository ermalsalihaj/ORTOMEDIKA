<?php
require_once ('modeliterminet.php');

if(isset($_GET['id'])){
    $terminetId = $_GET['id'];
}
$terminet = new termini();
$terminet->delete($terminetId);

?>