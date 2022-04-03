<?php
namespace coding\app\controllers;


use coding\app\Models\Order;
use coding\app\Models\User_payment_method;
use coding\app\Models\User;
use coding\app\Models\User_address;


class OrderController extends Controller{

   
    function add_order(){

        $users=new User();
        $allusers =$users->getAll();

        $user_payment_methods=new User_payment_method();
        $alluser_payment_methods=$user_payment_methods->getAll();
        
        $user_addresses=new User_address();
        $alluser_addresses =$user_addresses->getAll();

            $data=[
            "users" =>$allusers,
            "user_payment_methods" =>$alluser_payment_methods,
            "user_addresses" => $alluser_addresses
            ];

        $this->view('add_order',$data);
    }

    function editorder(){
        $this->view('edit_order');
    }
    
    function listAll(){
        $orders=new Order();
        $allorders=$orders->getAll();

        $this->view('app-order-list',$allorders);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $order=new order();

     
        $order->total=$_POST['total'];
        $order->discount=$_POST['discount'];
        $order->net_total=$_POST['net_total'];
        $order->payment_method=$_POST['user_payment_methods'];
        $order->user_id=$_POST['users'];
        $order->address_id=$_POST['user_addresses'];
        $order->status=$_POST['status'];


        if($order->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);


    }
    function update(){

    }
    public function remove(){

    }



}
?>