<?php
class Databasee{
    public $pdo;

    public function __construct(){
        try{

            $link = new PDO('mysql:host=localhost;dbname=sherbimet', 'root','');
            $this->pdo = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }
}
?>



