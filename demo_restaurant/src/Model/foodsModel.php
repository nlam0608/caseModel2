<?php
 namespace Src\Model;

 class foodsModel
 {
     private $dbConnect;

     public function __construct()
     {
         $conn = new DBConnect();
         $this->dbConnect = $conn->connect();
     }

     public function getAll()
     {
         $sql = "SELECT * FROM foods";
         $stmt = $this->dbConnect->query($sql);
         return $stmt->fetchAll();
     }



     public function delete($id)
     {
         $sql = "DELETE *FROM foods WHERE id=:id";
         $stmt = $this->dbConnect->prepare($sql);
         $stmt->bindParam("id",$id);
         $stmt->execute();
     }

     public function getById($id)
     {
         $sql = "SELECT * FROM foods WHERE id = ".$id;
         $stmt = $this->dbConnect->query($sql);
         return $stmt->fetch();
     }

     public function store($data){
         $sql = "CALL addFoods(?,?,?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam( 1,$data['name']);
        $stmt->bindParam( 2,$data['price']);
        $stmt->bindParam( 3,$data['ingredient']);
        $stmt->bindParam( 4,$data['kind_of']);
        $stmt->bindParam( 5,$data['image']);
        $stmt->execute();
     }

     public function foodAppetizer()
     {
         $sql = "SELECT * FROM foods WHERE kind_of = 'Khai vị'";
         $stmt = $this->dbConnect->query($sql);
         return $stmt->fetchAll();
     }

     public function foodMainDishes()
     {
         $sql = "SELECT * FROM foods WHERE kind_of = 'Món Chính'";
         $stmt = $this->dbConnect->query($sql);
         return $stmt->fetchAll();
     }

     public function foodDesserts()
     {
         $sql = "SELECT * FROM foods WHERE kind_of = 'Món tráng miệng'";
         $stmt = $this->dbConnect->query($sql);
         return $stmt->fetchAll();
     }
 }