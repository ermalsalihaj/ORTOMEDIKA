<?php
class Database{
    public $pdo;

    public function __construct(){
        try{
            // session_start();
            $link = new PDO('mysql:host=localhost;dbname=stafi', 'root', '');
            $this->pdo = $link;
        }catch(PDOException $exception){
            die($exception->getMessage());
        }
    }   


}
?>