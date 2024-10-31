document.getElementById("btn_menu").addEventListener("click", mostrar_menu);
document.getElementById("back_menu").addEventListener("click", ocultar_menu);

nav = docuement.getElementById("nav");
background_menu = document.getElementById("back_menu");

function mostrar_menu(){

    nav.style.right = "0px";
    back_menu.style.display = "block";

}

function ocultar_menu(){

    nav.style.right = "-250px";
    back_menu.style.display = "none";
    
}