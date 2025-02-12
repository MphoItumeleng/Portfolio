var tablinks = document.getElementsByClassName("tab-links");
var tabcontents = document.getElementsByClassName("tab-contents");
        
function opentab(tabname) {
    let tablinks = document.querySelectorAll(".tab-links");
    let tabcontents = document.querySelectorAll(".tab-contents");

    tablinks.forEach(link => link.classList.remove("active-link"));
    tabcontents.forEach(content => content.classList.remove("active-tab"));

    document.querySelector(`[onclick="opentab('${tabname}')"]`).classList.add("active-link");
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