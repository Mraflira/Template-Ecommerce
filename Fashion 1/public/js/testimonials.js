var testimonials = document.getElementById('testimonials');
var controlTestimonials1 = document.getElementById('controltestimonials1');
var controlTestimonials2 = document.getElementById('controltestimonials2');


controltestimonials1.onclick = function() {
    testimonials.style.transform = "translateX(0px)";
    controlTestimonials1.classList.add("active");
    controlTestimonials2.classList.add("active");
}

controltestimonials2.onclick = function() {
    testimonials.style.transform = "translateX(-400px)";
    controlTestimonials1.classList.add("active");
    controlTestimonials2.classList.add("active");
}