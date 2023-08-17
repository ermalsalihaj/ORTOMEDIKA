
<?php
session_start();
require_once ('sherbimetController.php');
?>
 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sherbimet Mjeksore</title>
    <link rel="stylesheet" href="./css/sherbimet.css" />
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
    <header>
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
    </header>
    
   
    <div class="cards">
    <?php
    $sherbimet = new sherbimi();
    $all = $sherbimet->readData();
    for($i = 0; $i < count($all); $i++){
        echo '<div class="card">
      <div class="face front">
    
    <img src="' .$all[$i]['image'].'">
     <h3>'.$all[$i]['title'].'</h3>
      </div>
    
        <div class="face back">
        <p>' .$all[$i]['body']. '</p>
        </div>
        </div>';
    }
?>
</div>

      <!-- KARTA E PARE -->
    <!--<div class="card">
        <div class="face front">
          <img src="img/Anesteziologjia.jpg" alt="" name="image" />
          <h3 name="title">Anesteziologjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Anesteziologjia është një specializim mjekësor që merret me
            zvogëlimin ose eliminimin e vetëdijes dhe ndjesisë së stimujve të
            jashtëm (anestezi), pra zvogëlimin ose eliminimin e ndjesisë së
            dhimbjes (analgjezisë) gjatë procedurave të ndryshme diagnostike ose
            terapeutike mjekësore, më së shpeshti kirurgjikale.
          </p>
        </div>
      </div>

    
      <div class="card">
        <div class="face front">
          <img src="img/Kardiokirurgji.jpg" alt="" name="image" />
          <h3 name="tile">Kardiokirurgjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Kardiokirurgji jane nderhyrjet torakale si: operacionet e kancerit
            te mushkerive, operacionet e tumoreve benigne te mushkeris dhe
            operacionet e infeksioneve te mushkeris.
          </p>
        </div>
      </div>

     
      <div class="card">
        <div class="face front">
          <img src="img/Kardiologjia.jpg" alt="" name="image" />
          <h3 name="title">Kardiologjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Dega e shkencës së mjekësisë që studion sëmundjet që lidhen me
            zemrën dhe sistemin e qarkullimit të gjakut quhet kardiologji.
            Kardiologjia, e cila më parë ishte një degë e mjekësisë interne,
            tani është një departament i veçantë.
          </p>
        </div>
      </div>
    </div>
   
    
      <div class="card">
        <div class="face front">
          <img src="img/endokrinologjia.jpg" alt=""name="image" />
          <h3 name="title">Endokrinologjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Endokrinologjia është një degë e biologjisë dhe mjekësisë që merret
            me sistemin endokrin, sëmundjet e tij dhe sekrecionet e tij
            specifike të njohura si hormone. Ai gjithashtu ka të bëjë me
            integrimin e ngjarjeve zhvillimore, përhapjen, rritjen, aktivitetet
            psikologjike gjumit.
          </p>
        </div>
      </div>

     
      <div class="card">
        <div class="face front">
          <img src="img/Optomotologjia.jpg" alt="" name="image" />
          <h3 name="title">Optomotologjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Optalmologjia është një subspecialitet kirurgjik në mjekësi që
            merret me diagnostikimin dhe trajtimin e çrregullimeve të syrit.Një
            oftalmolog është një mjek që i nënshtrohet trajnimit subspecial në
            kujdesin mjekësor dhe kirurgjik të syve.
          </p>
        </div>
      </div>
    
      
      <div class="card">
        <div class="face front" >
          <img src="img/Stomatologji1.jpg" alt="" name="image" />
          <h3 name="title">Stomatologjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Degë e mjekësisë, që merret me studimin dhe mjekimin e sëmundjeve të
            dhëmbëve.
          </p>
        </div>
      </div>
    </div>

   
      <div class="card">
        <div class="face front">
          <img src="img/KirurgjiPlastike.jpg" alt="" name="image"/>
          <h3 name="title">Kirurgji Plastike</h3>
        </div>

        <div class="face back">
          <p name="body">
            Kirurgjia Plastike Rikonstruktive dhe Estetike është një nga degët e
            kirurgjisë, që ndahet ne dy disiplina: kirurgjia estetike dhe
            kirurgjia rikonstruktive.Te dyja kane qellimin e sherimit me te
            shpejtë.
          </p>
        </div>
      </div>
     
     
      <div class="card">
        <div class="face front">
          <img src="img/Ortopedia2.jpg" alt="" name="image" />
          <h3 name="title">Ortopedia</h3>
        </div>

        <div class="face back">
          <p name="body">
            Ortopedi ortopedik ose kirurgjia (gjithashtu dha ortopedi) është
            dega e kirurgjisë në fjalë që kanë të bëjnë me kushtet e sistemit
            musculoskeletal. Ortopedik surgeons përdorimin kirurgjik të dy dhe
            jo-kirurgjikale do të thotë për të trajtuar musculoskeletal trauma,
            dëmtime sportive, degenerative sëmundjeve, infeksioneve, tumors dhe
            kushtet kongjenitale.
          </p>
        </div>
      </div>

      
      <div class="card">
        <div class="face front">
          <img src="img/Reumatologjia.jpg" alt="" name="image" />
          <h3 name="title">Reumatologjia</h3>
        </div>

        <div class="face back">
          <p name="body">
            asd Sëmundjet reumatike shfaqen me një gamë të gjerë të
            manifestimeve klinike e që caku i tyre janë nyjet, muskujt dhe
            kockat të cilat edhe shfaqin simptomat klinike si: ënjtje të nyjeve,
            shtangime të nyjeve dhe deformime.
          </p>
        </div>
       
      </div>-->
    </div>
   
  </body>
 

</html>

