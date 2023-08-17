<?php

require_once ('connection.php');

class termini extends dbConnecti{
    private $id;
    private $numripersonal;
    private $emri;
    private $mbiemri;
    private $emaili;
    private $fjalekalimi;
    private $sherbimi;
    private $mjeku;
    private $data;
    private $dbconn;

    public function __construct($id='',$numripersonal='',$emri='',$mbiemri='',$emaili='',$fjalekalimi='',$sherbimi='',$mjeku='',$data='')
    {
    $this ->id=$id;
    $this ->numripersonal=$numripersonal;
    $this ->emri=$emri;
    $this ->mbiemri=$mbiemri;
    $this ->emaili=$emaili;
    $this ->fjalekalimi=$fjalekalimi;
    $this ->sherbimi=$sherbimi;
    $this ->mjeku=$mjeku;
    $this ->data=$data;
  
    $this ->dbconn=$this ->connectDB();
    }
 
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setNumriPersonal($numripersonal){
        $this ->numripersonal=$numripersonal;
    }
    public function getNumriPersonal(){
        return $this ->numripersonal;
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

    public function setFjalekalimi($fjalekalimi){
        $this ->fjalekalimi=$fjalekalimi;
    }
    public function getFjalekalimi(){
        return $this ->fjalekalimi;
    }


    public function setSherbimi($sherbimi){
        $this ->sherbimi=$sherbimi;
    }
    public function getSherbimi(){
        return $sherbimi ->sherbimi;
    }

    public function setMjeku($mjeku){
        $this ->mjeku=$mjeku;
    }
    public function getMjeku(){
        return $mjeku ->mjeku;
    }

    public function setData($data){
        $this ->data=$data;
    }
    public function getData(){
        return $data ->data;
    }


    public function readData(){
        $query = $this->dbconn->query('SELECT * from terminet');

        return $query->fetchAll();
    }
 
    public function insertoDhenat(){
       $sql="INSERT INTO terminet (numripersonal,emri,mbiemri,emaili,fjalekalimi,sherbimi,mjeku,data) VALUES (:numripersonal,:emri,:mbiemri,:emaili,:fjalekalimi,:sherbimi,:mjeku,:data)";
        $stm=$this ->dbconn ->prepare ($sql);
        $stm ->bindParam(':numripersonal',$this->numripersonal);
        $stm ->bindParam(':emri',$this->emri);
        $stm ->bindParam(':mbiemri',$this->mbiemri);
        $stm ->bindParam(':emaili',$this->emaili);
        $stm ->bindParam(':fjalekalimi',$this->fjalekalimi);
        $stm ->bindParam(':sherbimi',$this->sherbimi);
        $stm ->bindParam(':mjeku',$this->mjeku);
        $stm ->bindParam(':data',$this->data);

        $stm ->execute();

         echo "<script>
         alert('Te dhenat jane regjistruar me sukses');
         document.location='terminet.php';
         </script>";
    }
    public function edit($id){
        $query = $this->dbconn->prepare('SELECT * from terminet WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->dbconn->prepare('UPDATE terminet SET numripersonal = :numripersonal,
        emri = :emri, mbiemri = :mbiemri,emaili = :emaili,fjalekalimi = :fjalekalimi,sherbimi = :sherbimi,mjeku = :mjeku,data = :data WHERE id = :id');
        $query->bindParam(':numripersonal', $request['numripersonal']);
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':mbiemri', $request['mbiemri']);
        $query->bindParam(':emaili', $request['emaili']);
        $query->bindParam(':fjalekalimi', $request['fjalekalimi']);
        $query->bindParam(':sherbimi', $request['sherbimi']);
        $query->bindParam(':mjeku', $request['mjeku']);
        $query->bindParam(':data', $request['data']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location:menuDashboard.php");
    }

    public function delete($id){
        $query = $this->dbconn->prepare('DELETE from terminet WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}

