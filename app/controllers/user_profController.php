<?php
namespace coding\app\controllers;

use coding\app\Models\User_profile;
use coding\app\Models\User;

class user_profController extends Controller{
   
    function add_user_profile(){
        $users=new User();
        $allusers=$users->getAll();
        $this->view('add_user_profile',$allusers);
    }
    function edituser_profile(){
        $this->view('edit_user_profile');
    }
    
    function listAll(){
        $user_profiles=new User_profile();
        $alluser_profiles=$user_profiles->getAll();

        $this->view('app-user_profile-list',$alluser_profiles);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $user_profile=new User_profile();
        
        $user_profile->phone=$_POST['phone'];
        $user_profile->address=$_POST['address'];
        $imageName=$this->uploadFile($_FILES['image']);
        $user_profile->image=$imageName!=null?$imageName:"default.png";
        $user_profile->user_id =$_POST['users'];


        if($user_profile->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }

    function update(){

    }
    public function remove(){

    }


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return null;
    }

    



}
?>