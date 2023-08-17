<?php
require_once './controllers/MenuController.php';
if(isset($_GET['id'])){
    $menuId = $_GET['id'];
}

$menu = new MenuController;
$currenMenu = $menu->edit($menuId); 
if(isset($_POST['submit'])) {
$menu->update($_POST, $menuId); 
}

?>

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
  <h3>NDRYSHO STAFIN</h3>
  <br>
  <br>
  
  <div >
    <img src="./images/form-image-1.png" alt="Image">
    <input type="file" name="image" value="<?php echo $currenMenu['menu_image']; ?>" />
  </div>
  <br />
  <div >
    <img src="./images/form-image-2.png" alt="Title">
    <input type="text" name="title" maxlength="50" value="<?php echo $currenMenu['menu_title'];?>" />
  </div>
  <br />
  <div >
    <img src="./images/form-image-3.png" alt="Body">
    <input type="text" name="body" maxlength="50" value="<?php echo $currenMenu['menu_body'];?>" />
  </div>
  <br />
  <input type="submit" name="submit" value="RUAJ" />
</form>

  


  </body>
</html>