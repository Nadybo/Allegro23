var modal2 = document.getElementById("modal2");
var btn2 = document.getElementById("openModalBtn2");
var btn3 =document.getElementById("openModalBtn3")
var closeBtn2 = document.querySelector("#modal2 .close");

function openModal2() {
    modal2.style.display = "block";
}

function closeModal2() {
    modal2.style.display = "none";
}

btn2.onclick = function() {
    openModal2();
}
btn3.onclick = function() {
    openModal2();
}

closeBtn2.onclick = function() {
    closeModal2();
}

window.onclick = function(event) {
    if (event.target == modal2) {
        closeModal2();
    }
}