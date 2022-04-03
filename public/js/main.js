// login
var modal2 = document.getElementById('idlog');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    console.log("test");
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

// sign
var modal = document.getElementById('id11');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal ) {
    modal.style.display = "none";
  }
}
//////////////slider head

var slideIndex2 = 1;
showSlides_he(slideIndex2);

function plusSlides_he(n) {
  showSlides_he(slideIndex2 += n);
}

function currentSlide_he(n) {
  showSlides_he(slideIndex2 = n);
}

function showSlides_he(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex2++;
  if (slideIndex2 > slides.length) {slideIndex2 = 1}    
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex2-1].style.display = "block";  
  dots[slideIndex2-1].className += " active";
  setTimeout(showSlides_he, 10000);
}

// show image in home
var modal3 = document.getElementById("myModal1");

var modalImg = document.getElementById("img01");
function image(event)  {    
    modal3.style.display = "block";
    modalImg.src = event.target.src;
}

var span2 = document.getElementsByClassName("close")[0];

span2.onclick = function () {
    modal3.style.display = "none";
}

////////////////card 1


// counter-container
const countdown=()=>{
    const upperDate = new Date('Jan 28,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days');
    var h = document.getElementById('hours');
    var m = document.getElementById('minutes');
    var s = document.getElementById('seconds');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown,1000);

// counter-container2
const countdown2=()=>{
    const upperDate = new Date('Jan 29,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days2');
    var h = document.getElementById('hours2');
    var m = document.getElementById('minutes2');
    var s = document.getElementById('seconds2');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown2,1000);

// counter-container3
const countdown3=()=>{
    const upperDate = new Date('Jan 30,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days3');
    var h = document.getElementById('hours3');
    var m = document.getElementById('minutes3');
    var s = document.getElementById('seconds3');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown3,1000);
// counter-container4
const countdown4=()=>{
    const upperDate = new Date('Jan 31,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days4');
    var h = document.getElementById('hours4');
    var m = document.getElementById('minutes4');
    var s = document.getElementById('seconds4');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown4,1000);
// counter-container5
const countdown5=()=>{
    const upperDate = new Date('Jan 31,2022 00:00:00').getTime();
    const currentDate = new Date().getTime();
    const diffDate = upperDate - currentDate;

    const second=1000;
    const minutes=second * 60;
    const hours =minutes * 60;
    const days=hours * 24;
  
    const remain_days=Math.floor(diffDate/days);
    const remain_hours=Math.floor((diffDate%days)/hours);
    const remain_minutes=Math.floor((diffDate%hours)/minutes);
    const remain_second=Math.floor((diffDate%minutes)/second);
    
    var d = document.getElementById('days5');
    var h = document.getElementById('hours5');
    var m = document.getElementById('minutes5');
    var s = document.getElementById('seconds5');
 
    d.innerHTML=remain_days;
    h.innerHTML=remain_hours;
    m.innerHTML=remain_minutes;
    s.innerHTML=remain_second;
}
setInterval(countdown5,1000);

//////////// slider image/////////

function openModal() {
    document.getElementById("myModal_im").style.display = "block";
  }
  function closeModal() {
    document.getElementById("myModal_im").style.display = "none";
  }
  var slideIndex3 = 1;
  
  function plusSlides(n) {
    showSlides(slideIndex3 += n);
  }
  
  function currentSlide(n) {
    showSlides(slideIndex3 = n);
  }
  
  function showSlides(n) {
    var i;
    var slides_d = document.getElementsByClassName("mySlides_im");
    var dots_d = document.getElementsByClassName("demo");
  
    if (n > slides_d.length) {slideIndex3= 1}
    if (n < 1) {slideIndex3 = slides_d.length}
    for (i = 0; i < slides_d.length; i++) {
      slides_d[i].style.display = "none";
    }
    for (i = 0; i < dots_d.length; i++) {
      dots_d[i].className = dots_d[i].className.replace(" active", "");
    }
    slides_d[slideIndex3-1].style.display = "block";
    dots_d[slideIndex3-1].className += " active";
  }
            //////////read more////////
      function myFunction() {
        var dots_m = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");
      
        if (dots_m.style.display === "none") {
          dots_m.style.display = "inline";
          btnText.innerHTML = "اقرا المزيد"; 
          moreText.style.display = "none";
        } else {
          dots_m.style.display = "none";
          btnText.innerHTML = "اقرا اقل"; 
          moreText.style.display = "inline";
        }
      }

      //////////trenslation
      function togglestyle() {
        var styles = document.getElementsByTagName('link')[1];
        var paragraphEN = document.getElementById('en');
        var paragraphAR = document.getElementById('ar');

        if (styles.getAttribute('href') == 'css/style.css') {
            styles.setAttribute('href', 'css/styleEN.css');
            paragraphEN.style.display = 'none';
            paragraphAR.style.display = 'block';

        }
        else {
            styles.setAttribute('href', 'css/style.css');
            paragraphAR.style.display = 'none';
            paragraphEN.style.display = 'block';
        }
    }

    /////////////////