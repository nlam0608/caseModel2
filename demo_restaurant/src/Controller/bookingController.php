<?php

namespace Src\Controller;
use Src\Model\bookingModel;
class bookingController
{
    private $bookingModel;

    public function __construct()
    {
        $this->bookingModel = new bookingModel();
    }

    public function index()
    {
        $bookings = $this->bookingModel->getAll();
        include_once "src/View/booking/list.php";
    }

    public function showInformation($id)
    {
        $booking = $this->bookingModel->getById($id);
        include_once "src/View/booking/information.php";
    }
}