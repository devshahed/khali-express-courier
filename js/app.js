let sidebar = document.getElementById("sidebar");

function sidebarShow(){
    if(sidebar.classList.contains("sidebar")){
        sidebar.classList.remove("sidebar");
    }else{
        sidebar.classList.add("sidebar");
    }
}