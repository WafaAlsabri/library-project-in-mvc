<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "elib");

if(isset($_POST['submit']))
{
 
  $email=$_POST['email'];
  $password=$_POST['password'];
 $querey="select * from users where email='$email' && password= $password";
 $result=mysqli_query($connect,$querey);
 $row=mysqli_fetch_array($result);
if($row)
  {
    $_SESSION["email"]=$row["email"];
    $_SESSION["password"]=$row["password"];
   header("Location:index.php");
}
else{
  echo '<script>alert(" Sorry !! username or password is wrong !" )</script>';
}

}
?>

<!DOCTYPE html>
<html lang="en">
 <!-- head -->
 <?php include "head.php"; ?> 
<body dir="rtl" class="grid-container" id="index">
 <?php include "header.php"; ?>
    <main>
 <!-- login -->

<section>
            
            
            <div id="" class="">
            <!-- <span  onclick="document.getElementById('idlog').style.display='none' " class="close2" title="Close Modal">&times;</span> -->
            <form class="modal-content animate" action="/admin/dashboards-ecommerce" method="POST">
                <div class="textcontainer">
                          <h2>تسجيل الدخول</h2>
                          <hr>
                </div>
            <div class="container">
            <input type="email" placeholder="  البريد الإلكتروني أو رقم الجوال   " name="email" required>
            
            <div style="display: inline;">
                <input type="password" placeholder="كلمة السر" name="password" required> 
                <span class="psw"> <a href="#">نسيت؟</a></span> 
            </div> 
            
            <button class="" type="submit "> </button> 
            <input class="login_btn" type="submit" value="تسجيل الدخول" name="submit"><br>

            </div>
            <div class="container2">
            <p>ليس لديك  حساب؟</p>
            <a class="login_btn2" href="/sign_up"> إنشاء حساب جديد </a>
            
            </div>
            </form>
            
       
            </div>       
            </section>
</main>
<script src="js/slide.js"></script>
<script src="js/main.js"></script>
<script src="js/cate.js"></script>
</body>
</html>