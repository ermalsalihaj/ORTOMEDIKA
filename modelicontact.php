<?php

require_once ('./connectContact.php');

class kontakti extends dbConnect{
    private $id;
    private $emri;
    private $mbiemri;
    private $emaili;
    private $nrtelefonit;
    private $mesazhi;
    private $dbconn;

    public function __construct($id='',$emri='',$mbiemri='',$emaili='',$nrtelefonit='',$mesazhi='')
    {
    $this ->id=$id;
    $this ->emri=$emri;
    $this ->mbiemri=$mbiemri;
    $this ->emaili=$emaili;
    $this ->nrtelefonit=$nrtelefonit;
    $this ->mesazhi=$mesazhi;
  
    $this ->dbconn=$this ->connectDB();
    }
 
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    

    public function setEmri($emri){
        $this ->emri=$emri;
    }
    public function getEmri(){
        return $this ->emri;
    }

    public function setMbiemri($mbiemri){
        $this ->mbiemri=$mbiemri;
    }
    public function getMbiemri(){
        return $this ->mbiemri;
    }

    public function setEmaili($emaili){
        $this ->emaili=$emaili;
    }
    public function getEmaili(){
        return $this ->emaili;
    }

    public function setNrTelefonit($nrtelefonit){
        $this ->nrtelefonit=$nrtelefonit;
    }
    public function getNrTelefonit(){
        return $this ->nrtelefonit;
    }


    public function setMesazhi($mesazhi){
        $this ->mesazhi=$mesazhi;
    }
    public function getMesazhi(){
        return $mesazhi ->mesazhi;
    }

  

    public function readData(){
        $query = $this->dbconn->query('SELECT * from kontakti');

        return $query->fetchAll();
    }
    public function insertoDhenat(){
        $sql="INSERT INTO kontakti (emri,mbiemri,emaili,nrtelefonit,mesazhi) VALUES (:emri,:mbiemri,:emaili,:nrtelefonit,:mesazhi)";
         $stm=$this ->dbconn ->prepare ($sql);
         $stm ->bindParam(':emri',$this->emri);
         $stm ->bindParam(':mbiemri',$this->mbiemri);
         $stm ->bindParam(':emaili',$this->emaili);
         $stm ->bindParam(':nrtelefonit',$this->nrtelefonit);
         $stm ->bindParam(':mesazhi',$this->mesazhi);

         $stm ->execute();
 
          echo "<script>
          alert('Dërgimi i mesazhit është realizuar me sukses!');
         document.location='contact.php';
          </script>";
     }

     public function delete($id){
        $query = $this->dbconn->prepare('DELETE from kontakti WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}