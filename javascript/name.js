const setName = () => {
  const e = document.getElementById('input').value;
  for (let i = 0; i < 2; i++){
    document.getElementById('name').value = e;
  } 
}