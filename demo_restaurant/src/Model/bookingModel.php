<?php

namespace Src\Model;

class bookingModel
{
    private $dbConnect;

    public function __construct()
    {
        $conn = new DBConnect();
        $this->dbConnect = $conn->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM booking";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();
    }

//    public function getById($id)
//    {
//        $sql = "SELECT * FROM booking WHERE id =".id;
//        $stmt = $this->dbConnect->query($sql);
//        return $stmt->fetch();
//    }
}