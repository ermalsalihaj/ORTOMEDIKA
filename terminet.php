
<?php
session_start();

require_once('modeliterminet.php');
if(isset($_POST['submit'])){
    $ter=new termini();
    $ter -> setNumriPersonal($_POST['numripersonal']);
    $ter -> setEmri($_POST['emri']);
    $ter -> setMbiemri($_POST['mbiemri']);
    $ter -> setEmaili($_POST['emaili']);
    $ter -> setFjalekalimi($_POST['fjalekalimi']);
    $ter -> setSherbimi($_POST['sherbimi']);
    $ter -> setMjeku($_POST['mjeku']);
    $ter -> setData($_POST['data']);

    $ter ->insertoDhenat();
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terminet</title>
    <link rel="stylesheet" href="./css/terminet.css">
    <style>
  
  .ula{
    text-decoration: none;
  color: black;
  font-size: 16px;
  padding-right: 25px;
  font-weight: bold;
  }
  .ula:hover{
    color: white;
  transition: 0.8s;
  }
    </style>
</head>
<body>
    <div></div>

    <ul class="navbar">
        
        <h1>ORTOMEDIKA</h1>

        <a href="./index.php"><img src="./img/home.png" /></a>
        <li><a href="./sherbimet.php">Shërbimet Mjeksore</a></li>
        <li><a href="./stafi.php">Stafi Mjekësor</a></li>
        <li><a href="./contact.php">Kontakti</a></li>
        <li><a href="./terminet.php">Terminet</a></li>
        <?php
                    if (!(isset($_SESSION['role']))) {
                        echo "<a class='ula' id='pad' href='kyqu.php'>Kyqu</a>";
                    } else if (isset($_SESSION['role']) == 'user') {
                        echo "<a class='ula' id='pad' href='logout.php'>Logout</a>";
                    }
        ?>
      </ul>
    </nav>


<div class="container">
  <div class="header">
    <h2>Rezervimi i Termineve</h2>
    <form action="" onsubmit="return validateFormTerminet()" name="myForm"  method="post">
    <p><b>Ju lutem plotësoni të dhënat e kërkuara për Rezervimin e Termineve!</b></p><br>
  </div>

  <form class="form" id="form">
    <div class="form-control">
      <label><b>Numri Personal:</b></label>
      <input type="text"  id="numri" name="numripersonal">
     </div>

   <div class="form-control">
    <label><b>Emri:</b></label>
    <input type="text"  name ="emri">
   </div>

   <div class="form-control">
    <label><b>Mbiemri:</b></label>
    <input type="text"  name="mbiemri">
   </div>

   <div class="form-control">
    <label><b>Emaili:</b></label>
    <input type="email"   name= "emaili" >
    
   </div>

   <div class="form-control">
    <label><b>Fjalekalimi:</b></label>
    <input type="password"   name="fjalekalimi" >
  
   </div>

   <div class="form-control">
    <label ><b>Ju lutem, zgjedhni Shërbimin Mjekësor!</b></label>
        </div>
        <select id="Sherbimi" name="sherbimi">
          <option value="Zg" selected hidden>Zgjedh:</option>
          <option value="Anesteziologji">Anesteziologji</option>
          <option value="Kardiokirurgji">Kardiokirurgji</option>
          <option value="Kardiologji">Kardiologji</option>
          <option value="Endokrinologji">Endokrinologji</option>
          <option value="Optomotologji">Optomotologji</option>
          <option value="Stomatologji">Stomatologji</option>
          <option value="Kirurgji Plastike">Kirurgji Plastike</option>
          <option value="Ortopedi">Ortopedi</option>
          <option value="Reumatologji">Reumatologji</option>
         </select>
         <br>

          <div class="form-control">
              <label ><b>Ju lutem, zgjedhni Mjekun që dëshironi!</b></label>
                  </div>
                  <select id="Mjeku" name="mjeku">
                      <option value="Zg" selected hidden>Zgjedh:</option>
                    <option value="Lindita Çipi ">Lindita Çipi(Anasteziologe)</option>
                    <option value="Gertiana Mullalli">Gertiana Mullalli(Kardiokirurge)</option>
                    <option value="Ana Sula">Ana Sula(Kardiologe)</option>
                    <option value="Elton Petaj">Elton Petaj(Optomatolog)</option>
                    <option value="Dritan Subashi">Dritan Subashi(Stomatolog)</option>
                    <option value="Kadri Venkatesh">Kadri Venkatesh(Kardiolog)</option>
                    <option value="Luan Xhelilaj">Luan Xhelilaj(Endokrinolog)</option>
                    <option value="Fjorda Tuka">Fjorda Tuka(Stomatologe)</option>
                    <option value="Esmeralda Sera">Esmeralda Sera(Ortopede)</option>
                    <option value="Olsiva Peçi">Olsiva Peçi(Kirurge)</option>
                    <option value="Nestor Thereska">Nestor Thereska(Kardiolog)</option>
                    <option value="Marco Jakobbi">Marco Jakobbi(Reumatolog)</option>
        </select>
        <br>

        <div class="form-control">
          <label for="Date "><b>Ju lutem, zgjedhni Daten!</b><br>
            <input type="date" name="data"><br>
        </label>
    </div>
    <div class="form-control">
    <input type="submit" name ="submit" value="Rezervo" id="dnButt"><br>
</div>
              
   </div>
  </form>
</div>
<script src="./js/terminet.js"></script>
</html>




