<?php
session_start();

require_once('./modelicontact.php');
if(isset($_POST['submit'])){
    $kon=new kontakti();
    $kon -> setEmri($_POST['emri']);
    $kon -> setMbiemri($_POST['mbiemri']);
    $kon -> setEmaili($_POST['emaili']);
    $kon -> setNrTelefonit($_POST['nrtelefonit']);
    $kon -> setMesazhi($_POST['mesazhi']);
   

    $kon ->insertoDhenat();
}
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontakti</title>
    <link rel="stylesheet" href="./css/contact.css" />
    <script defer src="./contact.js"></script>
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


    <section>
      <div class="container">
        <!-- PJESA E DERGIMIT TE MESAZHIT -->
         <div class="contactForm">
          <h2>Dergoni Mesazh</h2>
          <form action="" onsubmit="return validateContactForm()" name="contact-form"  method="post">
            <div class="formBox">
              <div class="inputBox w50">
                <input type="text" name="emri"  />
                <span>Emri</span>
              </div>

              <div class="inputBox w50">
                <input type="text" name="mbiemri"  />
                <span>Mbiemri</span>
              </div>

              <div class="inputBox w50">
                <input type="email" name="emaili"  />
                <span>Emaili</span>
              </div>

              <div class="inputBox w50">
                <input type="text" name="nrtelefonit"  />
                <span>Numri Telefonit</span>
              </div>

              <div class="inputBox w100">
                <span>Shkruani mesazhin këtu...</span>
                <textarea name="mesazhi" id="" cols="30" rows="10"></textarea>
              </div>

              <div class="inputBox" id="send">
                <input type="submit" name="submit" value="Send" />
              </div>
            </div>
          </div>
</from>

    

        <!-- PJESA E INFO KONTAKTIT -->
        <div class="contactInfo">
          <div>
            <h2>Kontakt Info</h2>
          </div>
          <ul class="info">
            <li>
              <span> <img src="./images/location.png" /></span>
              <span> Ortomedika, Prishtinë </span>
            </li>

            <li>
              <span> <img src="./images/email.png" /></span>
              <span> spitaliortomedika@hotmail.com </span>
            </li>

            <li>
              <span> <img src="./images/telephone-call.png" /></span>
              <span> +383 44 123 456 </span>
            </li>
          </ul>

          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2074.738200372819!2d20.
                        295905175470097!3d42.65875090586254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
                        1!3m3!1m2!1s0x1352fd247576adad%3A0xe995f8073a7e61f2!2sBeni%20Parking!5e0!3m2!1sen!2s!
                        4v1656073935147!5m2!1sen!2s"
            width="310"
            height="150"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          >
          </iframe>

          <ul class="media">
            <li>
              <a href=""> <img src="./images/facebook-contact form.png" /> </a>
            </li>

            <li>
              <a href=""> <img src="./images/twitter - contact form.png" /> </a>
            </li>

            <li>
              <a href="">
                <img src="./images/instagram - contact form.png" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>