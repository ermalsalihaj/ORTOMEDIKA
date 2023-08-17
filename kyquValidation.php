<?php
include_once 'users.php';

if(isset($_POST['login'])){
    if(empty($_POST['emrimbiemri']) || empty($_POST['fjalkalimi'])){

        echo "<script>
         alert('Ju lutem mbusheni vendet e zbrazëta!');
         document.location='kyqu.php';
         </script>";
   
    }else{
        $emrimbiemri = $_POST['emrimbiemri'];
        $fjalkalimi = $_POST['fjalkalimi'];
        $logInUsers = new KyquUsers();
        $users = $logInUsers->getUsersEmridheFjalekalimi();
    
        $i=0;
        foreach($users as $user){
           $i++;
           if($emrimbiemri == $user['emrimbiemri'] && $fjalkalimi == $user['fjalkalimi']){

            session_start();

            $_SESSION['emrimbiemri']=$emrimbiemri;
            $_SESSION['fjalkalimi']=$fjalkalimi;
            $_SESSION['role']=$user['role'];


            header ("location:index.php");
            exit();


           }else{
            if($i == sizeOf($users)){
                
           echo "<script>
           alert('EmriMbiemri ose Fjalekalimi nuk janë të saktë!');
           document.location='kyqu.php';
           </script>";
                exit();
            }
           }

        }
    }

}


?>
