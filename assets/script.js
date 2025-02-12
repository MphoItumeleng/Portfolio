var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
        
function opentab(tabname){
    for(tablink of tablinks){
        tablink.classList.remove("active-link");
    }
    for(tabcontent of tabcontents){
        tabcontent.classList.remove("active-tab");
    }
    event.currentTarget.classList.add("active-link");
    document.getElementById(tabname).classList.add("active-tab");
}

document.addEventListener("DOMContentLoaded", function () {
    const sidemenu = document.getElementById("sidemenu");

    window.openmenu = function () {
        sidemenu.style.right = "0";
    };

    window.closemenu = function () {
        sidemenu.style.right = "-200px";
    };
});