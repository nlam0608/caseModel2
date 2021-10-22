<?php

namespace Src\Controller;

use Src\Model\foodsModel;

class foodsController
{
    private $foodsModel;

    public function __construct()
    {
        $this->foodsModel = new foodsModel();
    }

    public function index()
    {
        $foods = $this->foodsModel->getAll();
        include_once "src/View/foods/list.php";
    }

    public function manager()
    {
        $foods = $this->foodsModel->getAll();
        include_once "src/View/foods/managerList.php";
    }

    public function delete($id)
    {
        $food = $this->foodsModel->delete($id);
        include_once "src/View/foods/list.php";
    }

    public function showDetails($id)
    {
        $food = $this->foodsModel->getById($id);
        include_once "src/View/foods/detail.php";
    }

//    public function create()
//    {
//        if ($_SERVER["REQUE ST_METHOD"] == "GET") {
//            include_once "src/View/foods/create.php";
//        } else {
//            $data = [
//                "name" => $_REQUEST["name"],
//                "price" => $_REQUEST["price"],
//                "ingredient" => $_REQUEST[""],
//                "king-of" => $_REQUEST["king-of"],
//                "img" => $_REQUEST["img"],
//            ];
//            $this->foodsModel->store($data);
//            header("Location:index.php?page=food&action=list");
//        }
//    }

    public function store()
    {
        $data = [
            "name" => $_POST["name"],
            "price" => $_POST["price"],
            "ingredient" => $_REQUEST["ingredient"],
            "king-of" => $_REQUEST["king-of"],
            "img" => $_REQUEST["img"],
        ];
        var_dump($data);
        die();
        $this->foodsModel->store($data);
        header("Location:index.php?page=food&action=list");
    }

    public function ShowFormCreate()
    {
        include_once "src/View/foods/create.php";
    }

    public function showFoodsAppetizer()
    {
        $foods = $this->foodsModel->foodAppetizer();
        include_once "src/View/foods/list.php";
    }

    public function showFoodsMainDishes()
    {
        $foods = $this->foodsModel->foodMainDishes();
        include_once "src/View/foods/list.php";
    }

    public function showFoodsDesserts()
    {
        $foods = $this->foodsModel->foodDesserts();
        include_once "src/View/foods/list.php";
    }
}