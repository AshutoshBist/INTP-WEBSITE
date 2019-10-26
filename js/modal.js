// Get the modal
var modal = document.getElementById('id01');
var span = document.getElementsByClassName("close");
var btn = document.getElementById("modalbutton");

btn.onclick = function() {
  modal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


span.onclick = function() {
  modal.style.display = "none";
}
