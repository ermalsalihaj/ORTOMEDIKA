<?php
require_once ('sherbimetController.php');
if(isset($_GET['id'])){
    $sherbimetId= $_GET['id'];
}

$sherbimetmjeksore = new sherbimi();
$currentsherbimet = $sherbimetmjeksore->edit( $sherbimetId);

if(isset($_POST['submit'])){
    $sherbimetmjeksore->update($_POST,$sherbimetId);
}
?>


 

<!-- 
NEWNEWNEWNEW -->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/edit-menu.css" />
  </head>
  <body>

  <nav>
      <!-- PJESA E NAVBAR-IT -->

      <ul class="navbar">
        <h1>ORTOMEDIKA</h1>

        <li><a href="./menuDashboard.php">DASHBOARD</a></li>

      </ul>
    </nav>


  <form method="POST" class="form">
  <h3>NDRYSHO SHERBIMET</h3>
  <br>
  <br>
  
  <div >
    <img src="./images/form-image-1.png" alt="Image">
    <input type="file" name="image" value="<?php echo $currentsherbimet['image']; ?>">
  </div>
  <br />
  <div >
    <img src="./images/form-image-2.png" alt="Title">
    <input type="text" name="title" value="<?php echo $currentsherbimet['title']; ?>">
  </div>
  <br />
  <div >
    <img src="./images/form-image-3.png" alt="Body">
    <input type="text" name="body" value="<?php echo $currentsherbimet['body']; ?>">
  </div>
  <br />
  <input type="submit" name="submit" value="RUAJ" />
</form>

  


  </body>
</html>