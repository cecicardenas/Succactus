/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 
 function mOver(obj) {
 obj.innerHTML = "Tienda"
 }
 
 function mOut(obj) {
 obj.innerHTML = "Plantas chicas"
 }
 
 //https://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_animation1_toggle
 $(document).ready(function(){
 $("button").click(function(){
 $("div").animate({
 height: 'toggle'
 });
 });
 });
 
 */
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}        

