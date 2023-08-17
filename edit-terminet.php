<?php
require_once ('modeliterminet.php');
if(isset($_GET['id'])){
    $terminetId= $_GET['id'];
}

$terminet = new termini();
$currentterminet = $terminet->edit( $terminetId); if(isset($_POST['submit'])){
$terminet->update($_POST,$terminetId); } ?>

<nav>
      <!-- PJESA E NAVBAR-IT -->

      <ul class="navbar">
        <h1>ORTOMEDIKA</h1>

        <li><a href="./menuDashboard.php">DASHBOARD</a></li>
      
      </ul>
    </nav>

<form method="post">
  <style>
    /* 
#82AAE3
#91D8E4
#BFEAF5
#EAFDFC */
.navbar {
    z-index: 1;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    list-style-type: none;
    padding-right: 15px;
    padding-bottom: 5px;
    margin-bottom: 35px;
  }
  .navbar h1 {
    color: #82aae3;
    margin-right: 400px;
    font-family: "Poppins", sans-serif;
    font-size: 24px;
    font-weight: bold;
  }
  .navbar a img {
    padding-right: 15px;
    cursor: pointer;
    padding-bottom: 3px;
  }
  .navbar li a {
    text-decoration: none;
    color: black;
    font-size: 16px;
    font-weight: bold;
  }
  .navbar li a:hover {
    color: #82aae3;
    transition: 0.8s;
  }
  .navbar li::after {
    content: "";
    width: 0%;
    height: 2px;
    background: #82aae3;
    display: block;
    margin: auto;
    transition: 0.5s;
  }
  .navbar li:hover::after {
    width: 90%;
    margin-right: 30px;
  }
  .navbar li img {
    width: 70px;
  }
  

    form {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      background: #f9f9f9;
      border-radius: 10px;
      margin-bottom: 50px;
      margin-top: 20px;
    }
    body {
      background-color: #bfeaf5;
    }
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="date"],
    input[type="select"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0 22px 0;
      border: 1px solid #ccc;
      background: #f9f9f9;
      border-radius: 10px;
      font-size: 16px;
      resize: vertical;
    }

    input[type="submit"] {
      background-color: #8dc6ee;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 10px;
      margin: 5px 0;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #8dc6ee;
    }
  </style>
  NumriPersonal:
  <input
    type="text"
    name="numripersonal"
    value="<?php echo $currentterminet['numripersonal']; ?>"
  />
  <br />
  Emri:
  <input
    type="text"
    name="emri"
    value="<?php echo $currentterminet['emri']; ?>"
  />
  <br />

  Mbiemri:
  <input
    type="text"
    name="mbiemri"
    value="<?php echo $currentterminet['mbiemri']; ?>"
  />
  <br />
  Emaili:
  <input
    type="email"
    name="emaili"
    value="<?php echo $currentterminet['emaili']; ?>"
  />
  <br />
  Fjalekalimi:
  <input
    type="password"
    name="fjalekalimi"
    value="<?php echo $currentterminet['fjalekalimi']; ?>"
  />
  <br />
  Sherbimi:
  <select
    id="Sherbimi"
    name="sherbimi"
    value="<?php echo $currentterminet['sherbimi']; ?>"
  >
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
  <br />
  Mjeku:
  <select
    id="Mjeku"
    name="mjeku"
    value="<?php echo $currentterminet['mjeku']; ?>"
  >
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
  <br />
  Data:
  <input
    type="date"
    name="data"
    value="<?php echo $currentterminet['data']; ?>"
  />
  <br />
  <input type="submit" name="submit" value="RUAJ" />
</form>
