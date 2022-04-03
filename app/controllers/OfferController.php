<?php
namespace coding\app\controllers;

use coding\app\Models\Offer;
use coding\app\Models\Book;
use coding\app\Models\Category;

class OfferController extends Controller{

    function add_offer(){

        $categories=new Category();
        $allCategories =$categories->getAll();

        $books=new Book();
        $allbooks=$books->getAll();
        
            $data=[
            "categories" =>$allCategories,
            "books" =>$allbooks
            ];

        $this->view('add_offer',$data);
    }
    function editoffer(){
        $this->view('edit_offer');
    }


    
    function listAll(){
        $offers=new Offer();
        $alloffers=$offers->getAll();

        $this->view('app-offer-list',$alloffers);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $offer=new Offer();

     
        $offer->title=$_POST['title'];
        $offer->discount=$_POST['discount'];
        $offer->start_date=$_POST['start_date'];
        $offer->end_date=$_POST['end_date'];
        $offer->book_ids=$_POST['books'];
        $offer->category_ids=$_POST['categories'];
        $offer->all_books=$_POST['all_books'];
        $offer->created_by=1;
        $offer->is_active=$_POST['is_active'];


        if($offer->save())
        
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