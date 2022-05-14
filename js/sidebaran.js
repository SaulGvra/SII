/*const nav = document.querySelector('#sidebar');
    window.addEventListener('scroll',function(){
        nav.classList.toggle('active',window.scrollY> 150 )
    })*/

const desplazar = document.querySelector('.changer');
    desplazar.addEventListener("click", function(){
        document.getElementById("sidebar").classList.toggle("active");
    })

