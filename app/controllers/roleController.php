<?php
namespace coding\app\controllers;

use coding\app\Models\Role;


class roleController extends Controller{


    function add_role(){
        $this->view('add_role');
    }
    function editrole(){
        $this->view('edit_role');
    }

    function listAll(){
        $roles=new role();
        $allroles=$roles->getAll();

        $this->view('app-role-list',$allroles);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $role=new role();
        
        $role->name=$_POST['name'];
        $role->is_active=$_POST['is_active'];

      
        if($role->save())
        
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