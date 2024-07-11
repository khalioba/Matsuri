// Get the modal
var modal1 = document.getElementById("pop_charge");
var modal2 = document.getElementById("pop_tikets");

var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];



btn.onclick = function() {
    modal.style.display = "block";
    modal1.style.display = "block";
    modal2.style.display = "none";
    
    setTimeout(function() {

      modal.style.display = "block";
      modal2.style.display = "block";
      modal1.style.display = "none";
    }, 1000);
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}