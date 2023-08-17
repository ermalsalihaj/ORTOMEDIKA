<?php
require_once ('Databasee.php');


class sherbimi{
    public $Id;
    public $image;
    public $title;
    public $body;
    public $db;


    public function __construct($Id='',$image='', $title='',$body=''){
        $this ->Id=$Id;
        $this ->image=$image;
        $this ->title=$title;
        $this ->body=$body;
        $this->db = new Databasee;
    }
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setImage($image){
        $this ->image=$image;
    }
    public function getImage(){
        return $this ->image;
    }

    public function setTitle($title){
        $this ->title=$title;
    }
    public function getTitle(){
        return $this ->title;
    }

    public function setBody($body){
        $this ->body=$body;
    }
    public function getBody(){
        return $this ->body;
    }


   

    //CRUD

    public function readData(){
        $query = $this->db->pdo->query('SELECT * from sherbimetmjeksore');

        return $query->fetchAll();
    }

    public function insert($request){
        $request['image'] = './image/' .$request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO sherbimetmjeksore (image, title, body)
        VALUES (:image, :title, :body)');

        $query->bindParam(':image', $request['image']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function edit($id){
      
        $query = $this->db->pdo->prepare('SELECT * from sherbimetmjeksore WHERE id = :id');
        $query->bindParam(':id', $id);
        $query->execute();

        return $query->fetch();
    }

    public function update($request, $id){
        $query = $this->db->pdo->prepare('UPDATE sherbimetmjeksore SET image = :image,
        title = :title, body = :body WHERE id = :id');
        $query->bindParam(':image', $request['image']);
        $query->bindParam(':title', $request['title']);
        $query->bindParam(':body', $request['body']);
        $query->bindParam(':id', $id);
        $query->execute();

        return header('Location: menuDashboard.php');
    }

    public function delete($id){
        $query = $this->db->pdo->prepare('DELETE from sherbimetmjeksore WHERE id=:id');
        $query->bindParam(':id', $id);
        $query->execute();

        return header("Location: menuDashboard.php");
    }
}
?>