let myModal = new bootstrap.Modal(document.getElementById("infos"), {
  //recover the modale into myModal variable
  keybord: true,
});


// function who will opening the modale
function showModal() { 
  myModal.show();
}

//put the focus at the "input" name when the page is charged
document.body.addEventListener("load", focusOnFirstInput());
function focusOnFirstInput() {
  document.getElementById("nom").focus();
}

//check the inputs to see they are isn't empty
let submitButton = document.getElementById("subBtn");
submitButton.addEventListener("click", isEmpty);

function isEmpty(form) {
  let controlInput = document.getElementsByTagName("input");
  for (let i = 0; i < controlInput.length; i++) {
    if (controlInput[i].value === "") {
      console.dir(controlInput[i]);
      showModal();
    }
  }
}

//create counter for textarea zone
let saisie = document.getElementById('comments');
let count = document.getElementById('count');
let maxlength = saisie.getAttribute('maxlength');

saisie.addEventListener('input', event =>{
  let valueLength = event.target.value.length;
  let charLength = maxlength - valueLength;
    if(charLength < 0) return;
    count.innerText = charLength;
})



