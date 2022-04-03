<?php
namespace coding\app\controllers;

use coding\app\Models\Payement;


class payementController extends Controller{


    function add_payements(){
        $this->view('add_payements');
    }

    function listAll(){
        $payements=new Payement();
        $allpayements=$payements->getAll();

        $this->view('app-payements-list',$allpayements);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $payement=new Payement();
        
        $payement->name=$_POST['name'];
        $imageName=$this->uploadFile($_FILES['image']);

        $payement->image=$imageName!=null?$imageName:"default.png";
        $payement->created_by=1;
        $payement->is_active=$_POST['is_active'];

        if($payement->save())
        
        $this->view('feedback',['success'=>'data inserted successful']);
        else 
        $this->view('feedback',['danger'=>'can not add data']);

    }
    function edit(){
        $this->view('edit_payements');
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