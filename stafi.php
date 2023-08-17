<?php
 session_start();
require_once './controllers/MenuController.php';
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stafi Mjeksore</title>
    <link rel="stylesheet" href="./css/stafi.css" />
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
    <nav>
        <!-- PJESA E NAVBAR-IT -->
    
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

      <div class="flex-container">
  <?php
  $products = new MenuController;
  $all = $products->readData();
  for ($i = 0; $i < count($all); $i++) {
    echo '
    <div class="cards1">
      <div class="card">
        <img src="' . $all[$i]['menu_image'] . '"/>
        <p id="titulli">' . $all[$i]['menu_title'] . '</p>
        <h4 id="nentitulli">' . $all[$i]['menu_body'] . '</h4>
      </div>
    </div>';
  }
  ?>
</div>


      


    <footer class="footer">
      <div class="contain">
        <div class="row">
          <div class="footer-col">
            <h4>ORTOMEDIKA</h4>
            <ul>
              <li><a href="./sherbimet.php">Sherbimet</a></li>
              <li><a href="./stafi.php">Stafi</a></li>
              <li><a href="./terminet.php">Terminet</a></li>
              <li><a href="./kyqu.php">Kyqu</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Na Kontaktoni</h4>
            <ul class="cnt">
              <li>+383 44 123 456</li>
              <li>+383 49 123 456</li>
              <li>spitaliortomedika@hotmail.com</li>
              <li>Prishtinë</li>
            </ul>
          </div>
          <div class="footer-col" id="socials">
            <h4>Social Media</h4>
            <div class="social-links">
              <a href="#"><img src="./images/twitter - contact form.png" /></a>
              <a href="#"><img src="./images/facebook-contact form.png" /></a>
              <a href="#"><img src="./images/instagram - contact form.png" /></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  </body>
</html>
