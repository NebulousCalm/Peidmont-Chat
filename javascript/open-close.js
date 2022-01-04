// Modified Version of the modal tutorial on w3schools becuase I'm to lazy and spent the past hour trying to get my code to work and this right here does so...
var modal = document.getElementById('myModal');

var btn = document.getElementById('openChatBot');

var span = document.getElementsByClassName('close')[0];

btn.onclick = function() {
  modal.style.display = 'block';
}

span.onclick = function() {
  modal.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}