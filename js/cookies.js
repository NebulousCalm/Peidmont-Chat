const setCookie = (cname, cvalue, exdays) => {
  const d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  let expires = "expires=" + d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"; 
}

const getCookie = (cname) => {
  let name = cname + "=";
  let decodedCookie = decodeURIComponent(document.cookie);
  let ca = decodedCookie.split(';');
  for (let i = 0; i < ca.length; i++){
    let c = ca[i];
    while (c.charAt(0) == ' '){
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0){
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

/* function checkCookie(){
  let user = getCookie("username");
  if(user != ""){
    var x = user;
    alert(user);
  } else {
    user = document.getElementById('input').value;
    alert(user);
    if (user != '' && user != null){
      setCookie("username", user, 30);
    }
  }
} */

const checkCookie = () => {
  let user = getCookie('username');
  if(user != ""){
    var x = user; // For document.getElementById('inputField').value;
    document.getElementById('name').value = x;
  } else {
    user = prompt("Please enter your name:","");
     if (user != "" && user != null) {
       setCookie("username", user, 30);
     }
  }
}