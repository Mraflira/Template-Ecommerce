const openButton  = document.querySelector(".open-button");
const overlay = document.querySelector(".overlay");

openButton.addEventListener('click', function(){
        overlay.classList.toggle('open-overlay'); 
});

// const closeButton  = document.querySelector(".close-button");
// const overlay = document.querySelector(".overlay");

// closeButton.addEventListener('click', function(){
//         overlay.classList.toggle('close-overlay');
// });
