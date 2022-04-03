<?php
namespace coding\app\controllers;

use coding\app\Models\Order_details;


class orderdetailsController extends Controller{


    function add_orderdetails(){
        $this->view('add_orderdetails');
    }
    function editorderdetails(){
        $this->view('edit_orderdetails');
    }
    
    function orderdetails(){
        $this->view('app-orderdetails-list');
    } 

}
?>