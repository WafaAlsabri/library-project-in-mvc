<?php
namespace coding\app\controllers;

use coding\app\Models\User_token;


class user_tokController extends Controller{


    function add_user_token(){
        $this->view('add_user_token');
    }
    function edituser_token(){
        $this->view('edit_user_token');
    }
    function user_token(){
        $this->view('app-user_token-list');
    } 

}
?>