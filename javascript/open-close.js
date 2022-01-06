// Modified Version of the modal tutorial on w3schools becuase I'm to lazy and spent the past hour trying to get my code to work and this right here does so...
const modal = document.getElementById('myModal');

const btn = document.getElementById('openChatBot');

const span = document.getElementsByClassName('close')[0]; // why is this geting every .close and then selecting the first one?

btn.onclick = () => {
  modal.style.display = 'block';
}

span.onclick = () => {
  modal.style.display = 'none';
}

window.onclick = (event) => {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
}