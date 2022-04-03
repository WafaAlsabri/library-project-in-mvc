<?php
require_once __DIR__ . '/../vendor/autoload.php';
use coding\app\system\AppSystem;
use coding\app\system\Router;
use coding\app\controllers\UsersController;
use coding\app\controllers\Controller_home;
use coding\app\controllers\CategoryController;
use coding\app\controllers\AuthorsController;
use coding\app\controllers\PublishersController;
use coding\app\controllers\BooksController;
use coding\app\controllers\CityController;
use coding\app\controllers\OfferController;
use coding\app\controllers\OrderController;
use coding\app\controllers\orderdetailsController;
use coding\app\controllers\payementController;
use coding\app\controllers\useraddressController;
use coding\app\controllers\user_pay_MController;
use coding\app\controllers\user_profController;
use coding\app\controllers\user_tokController;
use coding\app\controllers\roleController;


use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']

);
$system=new AppSystem($config);
Router::get('/login', [Controller_home::class, 'login']);
Router::get('/sign_up', [Controller_home::class, 'sign_up']);
Router::get('/', [Controller_home::class, 'library']);
Router::get('/cart', [Controller_home::class, 'cart']);
Router::get('/category', [Controller_home::class, 'category']);
Router::get('/details', [Controller_home::class, 'details']);
Router::get('/checkout', [Controller_home::class, 'checkout']);

Router::get('/admin/dashboards-ecommerce', [Controller_home::class, 'dashboard']);

Router::get('/admin/users',[UsersController::class,'listAll']);
Router::get('/admin/new_user',[UsersController::class,'create']);

Router::post('/admin/save_user',[UsersController::class,'store']);


Router::get('/admin/categories',[CategoryController::class,'listAll']);
Router::get('/admin/add_category',[CategoryController::class,'add_category']);

Router::post('/admin/save_category',[CategoryController::class,'store']);


Router::get('/admin/user_payment_ms',[user_pay_MController::class,'listAll']);
Router::get('/admin/add_user_payment',[user_pay_MController::class,'add_user_payment']);

Router::post('/admin/save_user_payment',[user_pay_MController::class,'store']);

Router::get('/admin/authors',[AuthorsController::class,'listAll']);
Router::get('/admin/add_author',[AuthorsController::class,'add_author']);

Router::post('/admin/save_author',[AuthorsController::class,'store']);


Router::get('/admin/publishers',[PublishersController::class,'listAll']);
Router::get('/admin/add_publisher',[PublishersController::class,'add_publisher']);

Router::post('/admin/save_publisher',[PublishersController::class,'store']);


Router::get('/admin/books',[BooksController::class,'listAll']);
Router::get('/admin/add_book',[BooksController::class,'add_book']);

Router::post('/admin/save_book',[BooksController::class,'store']);


Router::get('/admin/city',[CityController::class,'listAll']);
Router::get('/admin/add_city',[CityController::class,'add_city']);

Router::post('/admin/save_city',[CityController::class,'store']);


Router::get('/admin/offers',[OfferController::class,'listAll']);
Router::get('/admin/add_offer',[OfferController::class,'add_offer']);

Router::post('/admin/save_offer',[OfferController::class,'store']);

Router::get('/admin/orders',[OrderController::class,'listAll']);
Router::get('/admin/add_order',[OrderController::class,'add_order']);

Router::post('/admin/save_order',[OrderController::class,'store']);

Router::get('/admin/orderdetails',[orderdetailsController::class,'listAll']);
Router::get('/admin/add_orderdetails',[orderdetailsController::class,'add_orderdetails']);

Router::post('/admin/save_orderdetails',[orderdetailsController::class,'store']);

Router::get('/admin/payements',[payementController::class,'listAll']);
Router::get('/admin/add_payements',[payementController::class,'add_payements']);

Router::post('/admin/save_payement',[payementController::class,'store']);


Router::get('/admin/roles',[roleController::class,'listAll']);
Router::get('/admin/add_role',[roleController::class,'add_role']);

Router::post('/admin/save_role',[roleController::class,'store']);


Router::get('/admin/useraddress',[useraddressController::class,'listAll']);
Router::get('/admin/add_useraddress',[useraddressController::class,'add_useraddress']);

Router::post('/admin/save_useraddress',[useraddressController::class,'store']);

Router::get('/admin/user_token',[user_tokController::class,'listAll']);
Router::get('/admin/add_user_token',[user_tokController::class,'add_user_token']);

Router::post('/admin/save_user_token',[useraddressController::class,'store']);


Router::get('/admin/user_profile',[user_profController::class,'listAll']);
Router::get('/admin/add_user_profile',[user_profController::class,'add_user_profile']);

Router::post('/admin/save_user_profile',[user_profController::class,'store']);


$system->start();

