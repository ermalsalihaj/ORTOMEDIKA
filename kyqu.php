<?php
session_start();

if(isset($_SESSION['emrimbiemri'])){
    header("location:index.php");
}else{

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kyqu</title>
    <link rel="stylesheet" href="./css/kyqu.css" />
  </head>
  <body>
    <nav>
      <div></div>

      <ul class="navbar">
        <h1>ORTOMEDIKA</h1>
        <!--<a href="./index.php"><img src="./img/home.png" /></a>
         <li><a href="./sherbimet.php">Shërbimet Mjekësore</a></li>
        <li><a href="./stafi.php">Stafi Mjekësor</a></li>
        <li><a href="./contact.php">Kontakti</a></li>
        <li><a href="./terminet.php">Terminet</a></li> -->
      </ul>
    </nav>

    <div class="main-container">
      <div class="left-container">
        <form
          action="kyquValidation.php"
          onsubmit="return validateFormKyqu()"
          name="Form"
          method="post"
          class="login_form"
        >
          <div class="font">Emri i Përdoruesit</div>
          <input type="text" name="emrimbiemri" />

          <div class="font2">Fjalkalimi</div>
          <input type="password" name="fjalkalimi" />

          <input id="button" type="submit" value="Kyqu" name="login" />

          <a id="paragraph" href="./regjistrohu.php">Nuk keni llogari? </a>
        </form>

        <?php
              require_once('kyquValidation.php');

        ?>
        
      </div>
    </div>

    <script src="kyqu.js"></script>
  </body>
</html>

<?php

}

?>
