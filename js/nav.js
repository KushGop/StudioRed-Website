const nav = document.getElementById('navigation');
const toggle = document.getElementById('nav-toggle');

toggle.addEventListener('click',()=>{
    const visibility = nav.getAttribute('data-visible');
    if(visibility==="false"){
        nav.setAttribute('data-visible',"true");
    }else{
        nav.setAttribute('data-visible',"false");
    }
})