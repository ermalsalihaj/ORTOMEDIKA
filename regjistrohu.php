<?php
session_start();

require_once('modeli.php');
if(isset($_POST['save'])){
    $regj=new regjistrohu();
    $regj -> setEmriMbiemri($_POST['emrimbiemri']);
    $regj -> setEmail($_POST['email']);
    $regj -> setFjalkalimi($_POST['fjalkalimi']);
    $regj -> setNrTelefonit($_POST['nrtelefonit']);

    $regj ->insertoDhenat();
}


?>



<!DOCTYPE html>
<htm>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h2>Shto te dhenat ne formularin e Regjistrimit</h2>
        <br>
        <br>
        <form action="" onsubmit="return validateFormRegjistrimi()" name="myForm"  method="post">
                <label>Emri dhe Mbiemri</label>
                <input type="text" class="inp" name="emrimbiemri" placeholder="Shto emrin dhe mbiemrin..."/>
                
                <label>Email</label>
                <input type="text" class="inp" name="email" placeholder="Shto email..."/>

               
                <label>Fjalkalimi</label>
                <input type="password" class="inp" name="fjalkalimi" placeholder="Shto fjalkalimin..."/>
               
                <label>Nr.Telefonit</label>
                <input type="text" class="inp" name="nrtelefonit" placeholder="Shto nrtelefonit"/>
                <button name='save'>REGJISTROHU</button>
            </form>
        </div>
    </body>
    <script src="regjistrohu.js"></script>
</htm>
