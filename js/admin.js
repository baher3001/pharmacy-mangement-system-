window.addEventListener("load",()=>{



    setInterval(function(){   
        document.querySelector(".alert").remove();
    }, 3000)


})





let inputs = document.querySelectorAll(".form-control");


for(var i=0;i<inputs.length;i++)
{
    inputs[i].addEventListener("blur",(e)=>{

        if(e.target.value.length<5)
        {
            e.target.nextElementSibling.style.display= "block";
        }else
        {
            e.target.nextElementSibling.style.display= "none";

        }

    })
}





