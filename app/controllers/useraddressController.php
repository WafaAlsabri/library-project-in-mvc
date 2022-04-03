<?php
namespace coding\app\controllers;

use coding\app\Models\User_address;
use coding\app\Models\User;
use coding\app\Models\City;

class useraddressController extends Controller{

    function add_useraddress(){
        $users=new User();
        $allusers =$users->getAll();

        $cities=new City();
        $allcities=$cities->getAll();

        $data=[
            "users" =>$allusers,
            "cities" => $allcities
            ];

        $this->view('add_useraddress',$data);
    }
    function edituseraddress(){
        $this->view('edit_useraddress');
    }
    

    function listAll(){
        $useraddresss=new User_address();
        $alluseraddresss=$useraddresss->getAll();

        $this->view('app-useraddress-list',$alluseraddresss);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $useraddress=new User_address();

     
        $useraddress->user_id=$_POST['users'];
        $useraddress->city_id=$_POST['cities'];
        $useraddress->address=$_POST['address'];
        $useraddress->phone=$_POST['phone'];
        $useraddress->lng=$_POST['lng'];
        $useraddress->lat=$_POST['lat'];
        $useraddress->is_active=$_POST['is_active'];


        if($useraddress->save())
        
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