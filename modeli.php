<?php

require_once ('db_Connection.php');

class regjistrohu extends dbConnectii{
    public $id;
    public $emrimbiemri;
    public $email;
    public $fjalkalimi;
    public $nrtelefonit;
    public $dbconn;

    public function __construct($id='',$emrimbiemri='',$email='',$fjalkalimi='',$nrtelefonit='')
    {
    $this ->id=$id;
    $this ->emrimbiemri=$emrimbiemri;
    $this ->email=$email;
    $this ->fjalkalimi=$fjalkalimi;
    $this ->nrtelefonit=$nrtelefonit;
  
    $this ->dbconn=$this ->connectDB();
    }
 
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setEmriMbiemri($emrimbiemri){
        $this ->emrimbiemri=$emrimbiemri;
    }
    public function getEmriMbiemri(){
        return $this ->emrimbiemri;
    }

    public function setEmail($email){
        $this ->email=$email;
    }
    public function getEmail(){
        return $this ->email;
    }

    public function setFjalkalimi($fjalkalimi){
        $this ->fjalkalimi=$fjalkalimi;
    }
    public function getFjalkalimi(){
        return $this ->fjalkalimi;
    }


    public function setNrTelefonit($nrtelefonit){
        $this ->nrtelefonit=$nrtelefonit;
    }
    public function getNrTelefonit(){
        return $nrtelefonit ->nrtelefonit;
    }

    //Pjesa e me poshtme eshte krijimi i crud, insert,delete,update
    public function lexoDhenat(){
        $sql="SELECT * FROM regjistrohu";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $rezultati= $stm->FETCHALL(PDO::FETCH_ASSOC); 
        return $rezultati;
    }

    public function insertoDhenat(){
       $sql="INSERT INTO regjistrohu (emrimbiemri,email,fjalkalimi,nrtelefonit) VALUES (:emrimbiemri,:email,:fjalkalimi,:nrtelefonit)";
        $stm=$this ->dbconn ->prepare ($sql);
        $stm ->bindParam(':emrimbiemri',$this->emrimbiemri);
        $stm ->bindParam(':email',$this->email);
        $stm ->bindParam(':fjalkalimi',$this->fjalkalimi);
        $stm ->bindParam(':nrtelefonit',$this->nrtelefonit);
       
        $stm ->execute();

         echo "<script>
         alert('Te dhenat jane regjistruar me sukses');
        // document.location='regjistrimi.php';
         </script>";
    }

    public function lexoDhenatSipasIDs($id){
        $sql = 'SELECT * FROM regjistrohu where id=:id';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([':id'=>$this->id=$id]);
        $rezultati=$stm->fetch(PDO::FETCH_ASSOC);
        return $rezultati;
    }

    public function updateDhenat(){
        $sql='UPDATE regjistrohu SET emrimbiemri=?,email=?,fjalkalimi=?,nrtelefonit=? where id=?';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->emrimbiemri,$this->email,$this->fjalkalimi,$this->nrtelefonit,$this->id]);
    }
   
    public function deleteDhenat($id){
        $sql="DELETE FROM regjistrohu where id=:id";
        $stm=$this->dbconn->prepare($sql);
        $stm ->bindParam(':id',$id);
        $stm ->execute();
        if($stm == true){
            echo "<script>
            alert('Te dhenat jane fshire me sukses');
            document.location='insert.php';
            </script>";
        }else{
            return false;
        }
        }

  

    }


































//$test = new regjistrimi ();
//$test ->insertoDhenat();
?>