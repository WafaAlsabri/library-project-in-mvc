<?php
namespace coding\app\controllers;

use coding\app\Models\Book;
use coding\app\Models\Author;
use coding\app\Models\Category;
use coding\app\Models\Publisher;


class BooksController extends Controller{
 
    function add_book(){
       

        $categories=new Category();
        $allCategories =$categories->getAll();

         $auth=new Author();
        $allauthors=$auth->getAll();

        $publishers=new Publisher();
        $allpublishers=$publishers->getAll();
  
            $data=["authors" => $allauthors,
            "categories" =>$allCategories,
            "publishers" =>$allpublishers
        ];
      
          $this->view('add_book',$data);

    }

    function editbook(){
        $this->view('edit_book');
    }
    
    // $bookname=$this->con->real_escape_string($_POST['book']);
    function listAll(){
        $books=new Book();
        $allbooks=$books->getAll();

        $this->view('app-book-list',$allbooks);

    }
 

    function store(){
        print_r($_POST);
        print_r($_FILES);
        $book=new Book();

        $imageName=$this->uploadFile($_FILES['image']);
        $book->image=$imageName!=null?$imageName:"default.png";       
        $book->title=$_POST['title'];
        $book->price=$_POST['price'];
        $book->description=$_POST['description'];
        $book->pages_number=$_POST['pages_number'];
        $book->quantity=$_POST['quantity'];
        $book->format=$_POST['format'];
        $book->category_id=$_POST['categories'];
        $book->author_id=$_POST['authors'];
        $book->publisher_id=$_POST['publishers'];
        $book->created_by=1;
        $book->is_active=$_POST['is_active'];


        if($book->save())
        
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