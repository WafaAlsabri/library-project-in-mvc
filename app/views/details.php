<!DOCTYPE html>
<html lang="en">
 <!-- head -->
<?php include "head.php"; ?> 
 

<body dir="rtl" class="grid-container">
<?php include "header.php"; ?>
    <main>
 <!-- login -->

         <!-- sign up -->

<!-- //slider image -->
   <?php include "slider.php";?>
        
        <section class="section">

                        <ul class="breadcrumb">
                                        <li><a href="#">الرئيسية</a></li>
                                        <li><a href="#">الكتب العربية</a></li>
                                        <li><a href="#">    كتب الكترونية </a></li>
                                        <li>  لأنك الله (كتاب إلكتروني)</li>
                        </ul>
                      
                <div class="row">
                                <div  class=" div1 ">
                                                <div class="div_ch">
 
                                                                <div class="column_im2">
                                                                   <img src="img/book (1).jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
                                                                 </div>

                                                                 <div class="row_im">
                                                                                <div class="column_im2">
                                                                                  <img class="demo cursor" src="img/book (1).jpg" style="width:100%"  onclick="openModal();currentSlide(1)">
                                                                                </div>
                                                                                <div class="column_im2">
                                                                                  <img class="demo cursor" src="img/book (2).jpg" style="width:100%"  onclick="openModal();currentSlide(2)" >
                                                                                </div>
                                                                                <div class="column_im2">
                                                                                  <img class="demo cursor" src="img/book (3).jpg" style="width:100%"  onclick="openModal();currentSlide(3)" >
                                                                                </div>
                                                                </div>
                                                </div>
                                                               
                                                               <div id="myModal_im" class="modal_im">
                                                                 <span class="close_im cursor" onclick="closeModal()">&times;</span>
                                                                 <div class="modal-content_im">
                                                               
                                                                   <div class="mySlides_im">
                                                                     <img src="img/book (1).jpg" style="width:100%">
                                                                   </div>
                                                               
                                                                   <div class="mySlides_im">
                                                                     <img src="img/book (2).jpg" style="width:100%">
                                                                   </div>
                                                               
                                                                   <div class="mySlides_im">
                                                                     <img src="img/book (3).jpg" style="width:100%">
                                                                   </div>
                                                                
                                                                   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                                                                   <a class="next_im" onclick="plusSlides(1)">&#10095;</a>
                                                               
                                                               <div class="line_im"></div>
                                                                   <div class="column_im">
                                                                     <img class="demo cursor" src="img/book (1).jpg" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                                                                   </div>
                                                                   <div class="column_im">
                                                                     <img class="demo cursor" src="img/book (2).jpg" style="width:100%" onclick="currentSlide(2)" alt="Snow">
                                                                   </div>
                                                                   <div class="column_im">
                                                                     <img class="demo cursor" src="img/book (3).jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                                                                   </div>
                                                                 </div>
                                                               </div>
                                                                                               
                                </div>
                                <div class="div2">
                                      <div class="ch_div2">
                                          <h2> لأنك الله (كتاب إلكتروني)</h2>
                                        <a>عرض المزيد<img src="svg/svgexport-51.svg" width="15px" height="15px"></a>
                                        <br> <strong class="price">19.39ر.س.</strong>
                                    <p class="p_lig">شامل الضريبة</p>
                                      </div>
                                      <div class="ch_div2_l">
                                          <p class="p_lig">وحدة البيع Each</p>
                                         <div>
                                            <i class="fa fa-star check " ></i>
                                            <i class="fa fa-star check"></i>
                                            <i class="fa fa-star check"></i>
                                            <i class="fa fa-star check"></i>
                                            <i class="fa fa-star check"></i>
                                            &nbsp; &nbsp;
                                          <a>(15 المراجعات)</a>
                                         </div>
                                         <div class="p_lig">
                                           رقم الصنف JBB410156 &nbsp; &nbsp; رقم المتج 4
                                         </div>
                                      </div>
                                       <h4> الصيغ المتوفرة</h4>
                                      <div class="ch_div2_b">
                                        <div class="it_r">
                                            <input type="radio" checked > &nbsp;كتاب الكتروني
                                           <br>
                                            <input type="radio" > &nbsp;كتاب مطبوع
                                        </div>
                                        <div class="it_l">
                                            <strong class="price">12.99ر.س.</strong>
                                             <p>شامل الضريبة</p>
                                             <strong class="price">17.25ر.س.</strong>
                                             <p>شامل الضريبة</p>
                                        </div>
                                      </div>
                                </div>
                                <div class="div3">
                                      <div class="div3_d1"> 
                                        <div class="note">
                                                        <p><strong>ملاحظة:</strong> سيتم إضافة هذا الكتاب الإلكتروني الى مكتبتك في قارئ جرير
                                                                <span id="dots">.</span><span id="more"> سيتم إضافة هذا الكتاب الإلكتروني الى مكتبتك في قارئ جرير</span></p>
                                                        <a onclick="myFunction()" id="myBtn" style="color: blue; cursor: pointer;" > اقرا المزيد</a>
                                                </div>
                                               
                                                <div class="sal_but">
                                             
                                                        <select>
                                                          <option value="">1</option>
                                                          <option value="">2</option>
                                                          <option value="">3</option>
                                                        </select>
                                                
                                                      <div>
                                                         <a href="/sal">   <button class="add_bt add_card"><img  src="svg/cart-1.svg" style="margin-left: 5px;">اضف الى السلة</button></a>
                                                      </div>
                                                </div>
                                                <div class="ico_bt">
                                                    <span><img src="svg/svgexport-23 (2).svg" > تسوق آمن<img src="svg/svgexport-9 (2).svg" ></span>
                                                    <span><img src="svg/svgexport-10 (2).svg" > أصلي ومضمون<img src="svg/svgexport-9 (2).svg" ></span>
                                                    <span><img src="svg/svgexport-24 (2).svg" > شحن سريع ومجاني<img src="svg/svgexport-9 (2).svg" ></span>
                                                </div>
                                                        <hr>
                                                      <div class="div3_d2">
                                                          <button class="bt_svg"><img src="svg/svgexport-31 (1).svg" >مشاركة</button>
                                                          <button class="bt_svg"><img src="svg/svgexport-3 (2).svg" >المفضلة</button>
                                                          <button class="bt_svg"><img src="svg/svgexport-55.svg" width="17px" height="17px" >مقارنة</button>
                                                      </div>
                                        </div>
                                       
                         
                
                </div>
     </section>
     <section class="section_div">
       <p>
         كتاب يتحدث عن بعض أسماء الله الحسنى وكيف نعيشها في حياتنا حرص المؤلف أن يكون الكتاب مناسبا للمحتاج والمريض والسليم
       </p>
     </section>
   
            <section class="section1" dir="rtl" style="overflow-x: auto; ">
                        <div  >
                            <h2 class="section-title">المواصفات</h2>
                                        <table>                                           
                                          <tr>
                                             <td>رقم الصنف</td>
                                             <td>JBB410156</td>
                                          </tr>
                                          <tr>
                                            <td>رقم المنتج</td>
                                            <td>4</td>
                                          </tr>
                                          <tr>
                                            <td>المولف</td>
                                            <td>علي جابر الفيفي</td>
                                          </tr>
                                          <tr>
                                                        <td>الناشر</td>
                                                        <td>  دار الحضارة للنشر والتوزيع</td>
                                           </tr>
                                           <tr>
                                                        <td>تاريخ النشر</td>
                                                        <td>2016</td>
                                            </tr>
                                            <tr>
                                                        <td>صيغة الكتاب</td>
                                                        <td>Ebook</td>
                                        </tr>
                                        <tr>
                                                        <td> عدد الصفحات</td>
                                                        <td>  182</td>
                                        </tr>
                                        <tr>
                                                        <td> وزن الشحن(كجم)</td>
                                                        <td> 0.0100 </td>
                                        </tr>
                                        <tr>
                                                        <td>صيغة الملف</td>
                                                        <td>  ePub</td>
                                        </tr>
                                        <tr>
                                                        <td>صيغة الكتاب</td>
                                                        <td>عربي  </td>
                                        </tr>
                                        </table>
                                      </div>
                                      <div class="btn_to">
                                        عرض اقل  <img src="svg/svgexport-31 (2).svg" width="15px" height="15px">
                                      </div>
                </section>
                <hr>

                <section class="section2">
                  <div class="tab2">
                      <h2 class="section-title">مراجعات العملاء</h2>
                    <button class="butn_tab" >+ اكتب مراجعاتك </button>
                  </div>
                    <table>
                     
                        <tr>
                          <td >
                            <h3>good</h3>
                            <p>من قبل reem</p>
                          </td>
                          <td></td>  <td></td>
                          <td>2021/11/16</td>
                        </tr>
                        <tr>
                          <td>Good</td>
  <td></td>  <td></td>                          <td></td>
                        </tr>
                        <tr>
                            <td>
                              <h3>كتاب رائع</h3>
                              <p>من قبل خالد ابو جميلة</p>
                            </td>
                            <td></td>  <td></td>
                    <td>2021/9/25</td>
                          </tr>
                          <tr>
                            <td>جميل جداً</td>
                            <td></td>
                            <td></td>  <td></td>
                          </tr>
                          <tr>
                              <td>
                                <h3> لانك الله</h3>
                                <p>من قبل باسل </p>
                              </td>
                              <td></td>  <td></td>
                              <td>2021/9/20</td>
                            </tr>
                            <tr>
                              <td> جميل جداً ومفيد</td>
                              <td></td>  <td></td>
                              <td></td>
                            </tr>
                      </table>   
                      <div class="btn_to">
                          اظهار جميع المراجعات(15)  &nbsp;  <strong>&#10095;</strong>
                        </div>                   
                    </section>
                    <hr>
<section class="product">
  
  <h2 class="section-title" > منتجات مشابهة</h2>
  <div class="row ">
      <div class="card_sal">
            <a href="/details"><img class="im_book" src="img/book (1).jpg" ></a>  
              <h1>الصلاة وحكم تاركها</h1>
              <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
              
             
      </div>
      <div class="card_sal">
               <a href="/details"><img class="im_book" src="img/book (1).jpg" ></a> 
              <h1>الله</h1>
              <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
           
          
      </div>

      <div class="card_sal">
              <img class="im_book" src="img/book (1).jpg" >
              <h1>علامات القيامة الكبرى مجلد مقاس صغير</h1>
             
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
         
           
      </div>

      <div class="card_sal">
              <img class="im_book" src="img/book (1).jpg" >
              <h1>ويبدا العد التنازلي</h1>
              <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
            
           
      </div>
      <div class="card_sal">
                  <img class="im_book" src="img/book (1).jpg" >
                  <h1>(ضعف الامة النفسية المشكلة )</h1>
                 
                   <strong class="price">19.39ر.س.</strong>
                  <p>شامل الضريبة</p>
               
          </div>
          <div class="card_sal">
              <img class="im_book" src="img/book (1).jpg" >
              <h1>جهنم الصغرى</h1>
             <br>  <br>
               <strong class="price">19.39ر.س.</strong>
              <p>شامل الضريبة</p>
           
      </div>
</div>
</section>
<section>
  <br>
  <br>
  <br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br>  <br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br>  <br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br><br>
  <br>
</section>
<br>
    </main>
    <?php include "footer.php"; ?>
<script src="js/slide.js"></script>
<script src="js/main.js"></script>
<script src="js/cate.js"></script>
</body>
</html>