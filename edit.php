
<?php

require_once('modeli.php');
$dhenat= new regjistrohu();
$myId=$_GET['id'];
$record=$dhenat->lexoDhenatSipasIDs($myId);
 if (isset($_POST['edit'])){
     if ($myId==$dhenat->getId()){

        $dhenat -> setEmriMbiemri($_POST['emrimbiemri']);
        $dhenat -> setEmail($_POST['email']);
        $dhenat -> setFjalkalimi($_POST['fjalkalimi']);
        $dhenat -> setNrTelefonit($_POST['nrtelefonit']);

         echo $dhenat->updateDhenat();
    echo 
    "<script>
        alert('Te dhenat jane edituar me sukses');
        document.location='insert.php'
    </script>";
     }
 }
  

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href ="css/mysingUPstyle.css" />
        <title>Formulari i Regjistrimit</title>
    </head>
    <body>
        <div id="formulari">
        <h2>Ndrysho te dhenat ne Formularin e Regjistrimit</h2>
        <br>
        <br>
            <form action='' method="POST">
                <label>Emri dhe Mbiemri</label>
                <input type="text" class="inp" name="emrimbiemri"
                    value ="<?php echo $record['emrimbiemri'];?> "/>

                    <label>Email</label>
                <input type="text" class="inp" name="email"
                    value ="<?php echo $record['email'];?> "/>

                <label>Fjalkalimi</label>
                <input type="text" class="inp" name="fjalkalimi"
                    value ="<?php echo $record['fjalkalimi'];?> "/>

                <label>Nr.Telefonit</label>
                <input type="text" class="inp" name="nrtelefonit"
                     value ="<?php echo $record['nrtelefonit'];?> "/>
                     
                <button name='edit'>RUAJ</button>
            </form>
        </div>
    </body>
</html>