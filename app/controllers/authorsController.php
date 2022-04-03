<?php
namespace coding\app\controllers;

use coding\app\Models\Author;

class AuthorsController extends Controller{
    function add_author(){
        $this->view('add_author');
    }
    function listAll(){
        $authors=new Author();
        $allauthors=$authors->getAll();

        $this->view('app-author-list',$allauthors);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $author=new Author();
        
        $author->name=$_POST['name'];
        $author->phone=$_POST['phone'];
        $author->bio=$_POST['bio'];
        $author->email=$_POST['email'];
        $author->created_by=1;
        $author->is_active=$_POST['is_active'];
        
        if($author->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);


    }
    function editauthor(){
        $this->view('edit_author');
    }
    function update(){

    }
    public function remove(){

    }
}
?>