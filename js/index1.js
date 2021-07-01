$('.box').owlCarousel({

    margin:10,
    loop:true,
    autoplay:true,
    autoplayTimeout:2000,  // 2sc
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            nav:false

        },

        600:{
            items:2,
            nav:false

        },



        1000:{
            items:3,
            nav:false

        }  


    }

});
 


// sign-up  form

let signUp = document.querySelector(".sign-up"),
signBtn = document.querySelector("#btn-sign"),
closeBtn = document.querySelector("#close"),
inputs = document.querySelectorAll(".form-control");

signBtn.addEventListener("click",()=>{

    if(signUp.classList.contains("sign-up-active"))
    {
        signUp.classList.remove("sign-up-active");
    }else
    {
        signUp.classList.add("sign-up-active");

    }

})


closeBtn.addEventListener("click",()=>{
    
    signUp.classList.remove("sign-up-active");


})


for(var i = 0; i<inputs.length;i++)
{
    inputs[i].addEventListener("blur",(e)=>{
        if(e.target.value.length<4)
        {
            e.target.nextElementSibling.style.display="block";
        }else
        {
            e.target.nextElementSibling.style.display="none";

        }

    })
}

let login = document.querySelector(".log"),
logBtn = document.querySelector("#login"),
closeBtn1 = document.querySelector(".log #close");


logBtn.addEventListener("click",()=>{

    if(login.classList.contains("log-active"))
    {
        login.classList.remove("log-active");
    }else
    {
        login.classList.add("log-active");

    }

});

closeBtn1.addEventListener("click",()=>{
    
    login.classList.remove("log-active");


})


// log

setTimeout(function(){

    login.classList.add("log-active");



}, 10000)

// popup-video 
let popupVideo = document.querySelector(".popup-video"),
icon = document.querySelector(".icon"),
closeBtn2 = document.querySelector(".popup-video .close");

icon.addEventListener("click",()=>{

    if(popupVideo.classList.contains("popup-video-active"))
    {
        popupVideo.classList.remove("popup-video-active");
    }else
    {
        popupVideo.classList.add("popup-video-active");

    }


});


closeBtn2.addEventListener("click",()=>{

    popupVideo.classList.remove("popup-video-active");

})