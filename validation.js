function Seterror(id, error) {
    element = document.getElementById(id);
  element.getElementsByClassName('formerror')[0].innerHTML = error;
}

function clearErrors() {
errors = document.getElementsByClassName('formerror');
  for(let item of errors)
  {
      item.innerHTML = "";
  }
  }


function validateForm() {
clearErrors();
  let x = document.forms["myform"]["fphone"].value;
  if (x.length != 10) {
    Seterror("phone", "*Phone number should be of 10 digits!");
    return false;
  }

}