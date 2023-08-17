<?php
require_once './config/Database.php';



class MenuController{
    public $db;
    public $id;
    public $menu_image;
    public $menu_title;
    public $menu_body;

    public function __construct($id='',$menu_image='',$menu_title='',$menu_body=''){
        $this->db = new Database;

        $this ->id=$id;
        $this ->menu_image=$menu_image;
        $this ->menu_title=$menu_title;
        $this ->menu_body=$menu_body;
    }
    public function setId($id){
        $this ->id=$id;
    }
    public function getId(){
        return $this ->id;
    }

    public function setMenu_image($menu_image){
        $this ->menu_image=$menu_image;
    }
    public function getMenu_image(){
        return $this ->menu_image;
    }

    public function setMenu_title($menu_title){
        $this ->menu_title=$menu_title;
    }
    public function getMenu_title(){
        return $this ->menu_title;
    }

    public function setMenu_body($menu_body){
        $this ->menu_body=$menu_body;
    }
    public function getMenu_body(){
        return $this ->menu_body;
    }
        //CRUD

        public function readData(){
            $query = $this->db->pdo->query('SELECT * FROM menu');

            return $query->fetchAll();

        }   

        //INSERT
        public function insert($request){
            $request['image'] = './images/' .$request['image'];
            $query = $this->db->pdo->prepare('INSERT INTO menu (menu_image, menu_title, menu_body)
            VALUES (:menu_image, :menu_title, :menu_body)');

            $query->bindParam(':menu_image', $request['image']);
            $query->bindParam(':menu_title', $request['title']);
            $query->bindParam(':menu_body', $request['body']);   
            $query->execute();
            
            return header('Location: menuDashboard.php');
        }    

        //EDIT
        public function edit($id){
            $query = $this->db->pdo->prepare('SELECT * FROM menu WHERE id = :id');

            $query->bindParam(':id', $id);
            $query->execute();
            
            return $query->fetch();
        }   

 
        //UPDATE
        public function update($request, $id){
            $query = $this->db->pdo->prepare('UPDATE menu SET menu_image = :menu_image,
            menu_title = :menu_title, menu_body = :menu_body WHERE id = :id');

            $query->bindParam(':menu_image', $request['image']);
            $query->bindParam(':menu_title', $request['title']);
            $query->bindParam(':menu_body', $request['body']);

            $query->bindParam(':id', $id);
            $query->execute();


            return header('Location: menuDashboard.php');
        }

        //DELETE
        public function delete($id){
            $query = $this->db->pdo->prepare('DELETE FROM menu WHERE id = :id');

            $query->bindParam(':id', $id);

            $query->execute();

            return header('Location: menuDashboard.php');

        }

    }


?>


