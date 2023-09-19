let slider = document.querySelectorAll("mySlides1", "mySlides2", "mySlides3", "mySlides4" , "mySlides5");
let value = document.querySelectorAll("value");
value.textContent = slider.value;
slider.oninput = function(){
    value.textContent = this.value;
};