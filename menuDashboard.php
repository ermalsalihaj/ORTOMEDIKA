<?php
session_start();

require_once './modelicontact.php';
require_once './controllers/MenuController.php';
require_once ('modeliterminet.php');
require_once ('sherbimetController.php');
require_once('modeli.php');

$dhenat=new regjistrohu();
$allData=$dhenat ->lexoDhenat();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="./css/menuDashboard.css" />

    <script defer src="./menuDashboard.js"></script>
  </head>
  <body>
    <nav>
      <a href="#"> <h1>DASHBOARD</h1> </a>
      <a href="index.php" id="logout"> <h1>Log Out</h1></a>
    </nav>
    <div class="sidebar">
      <ul>
        <li>
          <img src="./images/admin.png" alt="" />
          <p>ADMIN</p>
        </li>
        <li><a id="sherbimet-link" href="#">Sherbimet</a></li>
        <li><a id="stafi-link" href="#">Stafi</a></li>
        <li><a id="kontakti-link" href="#">Kontakti</a></li>
        <li><a id="terminet-link" href="#">Terminet</a></li>
        <li><a id="userat-link" href="#">Userat</a></li>
      </ul>
    </div>

    <div class="main-content">
      <!-- STAFI -->
      <div class="staf">
        <table class="content-table">
          <thead>
            <tr>
              <th>Foto</th>
              <th>Emri</th>
              <th>Profesioni</th>
              <th>Ndrysho</th>
              <th>Fshi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $m = new MenuController;
            $allMenu = $m->readData(); foreach($allMenu as $menu): ?>

            <tr>
              <td><?php echo $menu['menu_image']?></td>
              <td><?php echo $menu['menu_title']?></td>
              <td><?php echo $menu['menu_body']?></td>
              <td>
                <a class="a" href="edit-menu.php?id=<?php echo $menu['id'];?>"
                  >Edit</a
                >
              </td>
              <td>
                <a class="a" href="delete-menu.php?id=<?php echo $menu['id'];?>"
                  >Delete</a
                >
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>

        <a id="butoni" href="./create-menu.php">SHTO</a>
      </div>

      <!-- KONTAKTI -->
      <div class="kontakt">
        <table class="content-table">
          <thead>
            <tr>
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Emaili</th>
              <th>NrTelefonit</th>
              <th>Mesazhi</th>
              <th>Fshi</th>
            </tr>
          </thead>

          <tbody>
            <?php
        $kon = new kontakti();
        $allkontakti = $kon->readData(); foreach($allkontakti as $kontakti): ?>
            <tr>
              <td><?php echo $kontakti['emri'];?></td>
              <td><?php echo $kontakti['mbiemri'];?></td>
              <td><?php echo $kontakti['emaili'];?></td>
              <td><?php echo $kontakti['nrtelefonit'];?></td>
              <td><?php echo $kontakti['mesazhi'];?></td>

              <td>
                <a href="delete-contact.php?id=<?php echo $kontakti['id'];?>"
                  >Delete</a
                >
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a id="butoni" href="./contact.php">SHTO</a>
      </div>

      <!-- TERMINET -->
      <div class="terminet">
        <table class="content-table">
          <thead>
            <tr>
              <th>NrPersonal</th>
              <th>Emri</th>
              <th>Mbiemri</th>
              <th>Emaili</th>
              <th>Fjalkalimi</th>
              <th>Sherbimi</th>
              <th>Mjeku</th>
              <th>Data</th>
              <th>Ndrysho</th>
              <th>Fshi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $ter = new termini();
            $allterminet = $ter->readData(); foreach($allterminet as $terminet):
            ?>
            <tr>
              <td><?php echo $terminet['numripersonal'];?></td>
              <td><?php echo $terminet['emri'];?></td>
              <td><?php echo $terminet['mbiemri'];?></td>
              <td><?php echo $terminet['emaili'];?></td>
              <td><?php echo $terminet['fjalekalimi'];?></td>
              <td><?php echo $terminet['sherbimi'];?></td>
              <td><?php echo $terminet['mjeku'];?></td>
              <td><?php echo $terminet['data'];?></td>
              <td>
                <a href="edit-terminet.php?id=<?php echo $terminet['id'];?>"
                  >Edit</a
                >
              </td>
              <td>
                <a href="delete-terminet.php?id=<?php echo $terminet['id'];?>"
                  >Delete</a
                >
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a id="butoni" href="./terminet.php">SHTO</a>
      </div>

      <!-- SHERBIMET -->
      <div class="sherbimet">
        <table class="content-table">
          <thead>
            <tr>
              <th>Foto</th>
              <th>Titulli</th>
              <th>Permbajtja</th>
              <th>Ndrysho</th>
              <th>Fshi</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $sh = new sherbimi();
            $allsherbimetmjeksore = $sh->readData(); foreach($allsherbimetmjeksore as
            $sherbimetmjeksore): ?>
            <tr>
              <td><?php echo $sherbimetmjeksore['image'];?></td>
              <td><?php echo $sherbimetmjeksore['title'];?></td>
              <td><?php echo $sherbimetmjeksore['body'];?></td>
              <td>
                <a
                  href="edit-sherbimet.php?id=<?php echo $sherbimetmjeksore['id'];?>"
                  >Edit</a
                >
              </td>
              <td>
                <a
                  href="delete-sherbimet.php?id=<?php echo $sherbimetmjeksore['id'];?>"
                  >Delete</a
                >
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <a id="butoni" href="./create-sherbimet.php">SHTO</a>
      </div>

      <!-- USERAT -->
      <div class="userat">
            
            <table class="content-table">
              <thead>
                    <tr>
                        <th>Emri&Mbiemri</th>
                        <th>Email</th>
                        <th type="password">Fjalkalimi</th>
                        <th>NrTelefonit</th>
                        <th>Ndrysho</th>
                        <th>Fshi</th>
                    </tr>
              </thead>

                    
              <tbody>
                <?php
                     foreach($allData as $key =>$value){
                        $value['emrimbiemri']
                     
                      ?>
                        <td><?php echo $value['emrimbiemri']?></td>
                        <td><?php echo $value['email']?></td>
                        <td><?php echo $value['fjalkalimi']?></td>
                        <td><?php echo $value['nrtelefonit']?></td>
                        <td> <a  href="edit.php?id=<?php echo $value['id']?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $value['id']?>">Delete</a></td>
                    </tr>  
                    
                  <?php
                     }
                  ?>
              </tbody>
                  
            </table>
            <a id="butoni" href="./regjistrohu.php">SHTO</a>

        </div>







      </div>






  </body>
</html>
