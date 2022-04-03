<?php
namespace coding\app\controllers;

use coding\app\Models\User;
use coding\app\Models\Role;

class UsersController extends Controller{

    function create(){
        $roles=new role();
        $allroles=$roles->getAll();

        $this->view('new_user',$allroles);
    }
    function editUser(){
        $this->view('edit_user');
    }

    function listAll(){
        $users=new User();
        $allusers=$users->getAll();

        $this->view('app-user-list',$allusers);

    }
 


    function store(){
        print_r($_POST);
        print_r($_FILES);
        $user=new User();
        
        $user->name=$_POST['name'];
        $user->email=$_POST['email'];
        $user->password=md5($_POST['password']);
        $user->is_active=$_POST['is_active'];
        $user->role_id=$_POST['roles'];
        
        if($user->save())
        
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