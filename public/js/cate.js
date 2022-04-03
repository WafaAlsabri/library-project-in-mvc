// JavaScript code
function search_ele() {
    let input = document.getElementById('searchbar').value
    input=input.toLowerCase();
    let x = document.getElementsByClassName('book_card');
      
    for (i = 0; i < x.length; i++) { 
        if (!x[i].innerHTML.toLowerCase().includes(input)) {
            x[i].style.display="none";
        }
        else {
            x[i].style.display="list-item";                 
        }
    }
}
///////////////////counter
const cardshow =document.querySelector('.navbar .icon_shop .span_c');
const addcard = document.querySelectorAll('.add_card');

for(var i=0 ; i<addcard.length ; i++){
    addcard[i].addEventListener('click',()=>{
        cardCount();
    })
}
function cardCount(){
    let prdcount = localStorage.getItem('cardsCount');
    prdcount = parseInt(prdcount);
    if(prdcount){
        localStorage.setItem('cardsCount',prdcount+1);
        cardshow.textContent=prdcount+1;

    }
    else{
        localStorage.setItem('cardsCount',1);
        cardshow.textContent=prdcount-1;
    }
}
function displayCard(){
    let prdcount = localStorage.getItem('cardsCount');
    if(prdcount){
        cardshow.textContent=prdcount;
    }
}
displayCard();