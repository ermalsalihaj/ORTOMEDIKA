<?php

session_start();
// me kqyr a o i jept ni username edhe qit username nuk e dergon ne php por kur del prej dashboard me dergu ne log in
if(!isset($_SESSION['emrimbiemri'])){
    header("location:kyqu.php");

}else{
    if($_SESSION['role']== 'user'){
        header("location:index.php");
    }else{
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Panel</title>
    
    <style>

        *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
.data{
    background: url(Photos/Contact3.jpg);
    height: 100vh;
    margin-left: 250px;
    background-size: cover;
    background-repeat: no-repeat;
}

nav{
    background: #B60112;
    line-height: 80px;
    position: fixed;
    width: 100%;
}

label{
    line-height: 80px;
    font-size: 30px;
    color: white;
    font-weight: 200;
    margin-left: 50px;
    cursor: pointer;
}

nav ul{
    float:right;
    margin-right: 20px;
}

nav ul li{
    line-height: 80px;
    margin: 0 10px;
}


nav ul li a{
    color: azure;
    font-size: 20px;
    padding: 6px 15px;
    font-weight: 600;
    background-color: light pink;
    border-radius: 3px;
}

nav ul li a:hover{

background-color: firebrick;
color: white;
transition: 0.5s;
}

.side-menu{

position: fixed;
background: #B60112;
width: 250px;
height: 100%;
margin-top: 80px;
}

.side-menu center img{
    height: 120px;
    width: 120px;
    border-radius: 50%;
    margin-top: 30px;
    border: 3px solid white;
}

.side-menu center h2{
    color: white;
}

.side-menu a{
    display: block;
    line-height: 60px;
    transition: 0.5s;

}


.side-menu a:hover{
    background: #ce1527;
    padding-left: 20px;
}

.side-menu span{
    font-size: 20px;
    margin-left: 10px;
    color: beige;
}

.side-menu i{

font-size: 20px;
margin-left: 20px;
color: white;
}

nav .menu-bar{
    float: right;
    margin-top: 20px;
    display: none;
    margin-right: 20px;
}


#menu{
display: none;

}

.side-menu .Logout{
display: none;

}
</style>
</head>
<body>
    <input type="checkbox" id="menu">

    <nav>
        <label>Dashboard</label>

        <ul>
            <li><a href="logout.php">Logout</a></li>
    </ul>

    <label for="menu" class="menu-bar">
<i class="fa fa-bars"></i>


</label>
    </nav>

    <div class="side-menu">
        <center>
            <img src=".img/img/Spitali1.jpg">
            <br><br>

            <h2>ORTOMEDIKA</h2>
    </center>
<br>

          <li><a href="./sherbimet.php">Shërbimet Mjeksore</a></li>
          <li><a href="./stafi.php">Stafi Mjekësor</a></li>
          <li><a href="./kontakti.php">Kontakti</a></li>
          <li><a href="./lokacionet.php">Lokacionet</a></li>
          <li><a href="./insert.php">Regjistrimi</a></li>
          <li id="kyqu"><a href="./kyqu.php">Kyqu</a></li>

      
        </ul>
      </nav>

<a href="logout.php" class="Logout"><span>Logout</span></a>
    </div>

<div class="data">

</div>

</body>
</html>

<?php

}
}
?>