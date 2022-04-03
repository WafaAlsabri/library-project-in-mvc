<?php
namespace coding\app\controllers;

use coding\app\Models\City;


class CityController extends Controller{

    function add_city(){
        $this->view('add_city');
    }

    function listAll(){
        $cities=new City();
        $allcities=$cities->getAll();

        $this->view('app-city-list',$allcities);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $city=new City();
        
        $city->name=$_POST['name'];

        $city->created_by=1;
        $city->is_active=$_POST['is_active'];


        if($city->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    function editcity(){
        $this->view('edit_city');
    }
    function update(){

    }
    public function remove(){

    }





}
?>