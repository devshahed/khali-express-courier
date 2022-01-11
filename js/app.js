let sidebar = document.getElementById("sidebar");

function sidebarShow(){
    if(sidebar.classList.contains("sidebar")){
        sidebar.classList.remove("sidebar");
    }else{
        sidebar.classList.add("sidebar");
    }
}

let rates = document.querySelector('#rates');
window.addEventListener('click', (e)=>{
    if(e.target == rates){
        rates.classList.remove('d-flex');
        rates.classList.add('d-none');
    }
});

let showRates = ()=>{
    rates.classList.remove('d-none');
    rates.classList.add('d-flex');
}

const navToggle = document.querySelector("#navToggle");
const navbar = document.querySelector('nav ul');
navToggle.addEventListener("click", ()=>{
    navbar.classList.toggle('showNav');
    navToggle.classList.toggle('text-white');
});