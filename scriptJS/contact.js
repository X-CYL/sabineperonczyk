let myModal = new bootstrap.Modal(document.getElementById("infos"), {
  //recover the modale into myModal variable
  keybord: true,
});

let errorMessages = [
  "Il y a des caractères interdits dans votre nom",
  "Il y a des caractères interdits dans votre prénom",
  'Votre email doit contenir "@ et ."',
];

//control the name format
let theName = document.getElementById("nom");
let errorNom = document.getElementById("nomSpanErrorText");
function controlName() {
  let nameControl = /^[A-zÀ-ú_\- ]+$/;
  if (nameControl.exec(theName.value) == null) {
    errorNom.innerText = errorMessages[0];
    return false;
  } else {
    errorNom.innerText = "";
    return true;
  }
}
theName.addEventListener("change", controlName);

//control the surname format
let theSurName = document.getElementById("prenom");
let errorPrenom = document.getElementById("prenomSpanErrorText");
function controlSurName() {
  let nameControl = /^[A-zÀ-ú_\- ]+$/;
  if (nameControl.exec(theSurName.value) == null) {
    errorPrenom.innerText = errorMessages[1];
    return false;
  } else {
    errorPrenom.innerText = "";
    return true;
  }
}
theSurName.addEventListener("change", controlSurName);

//control the mail format with @ and .
let mail = document.getElementById("mail");
let errorMail = document.getElementById("mailSpanErrorText");
function controlMail() {
  let verifMail = /^[a-zA-Z0-9_\-]+@[a-zA-Z0-9]{2,}[.][a-zA-Z]{3,4}$/;
  if (verifMail.exec(mail.value) == null) {
    errorMail.innerText = errorMessages[2];
    return false;
  } else {
    errorMail.innerText = "";
    return true;
  }
}
mail.addEventListener("change", controlMail);

//put the focus at the "input" name when the page is charged
document.body.addEventListener("load", focusOnFirstInput());
function focusOnFirstInput() {
  document.getElementById("nom").focus();
}

//check the inputs to see they are isn't empty
let submitButton = document.getElementById("subBtn");
submitButton.addEventListener("submit", isEmpty);
function isEmpty(event) {
  let controlInput = document.getElementsByTagName("input");
  for (let i = 0; i < controlInput.length; i++) {
    if (controlInput[i].value === "") {
<<<<<<< HEAD
=======
      //console.dir(controlInput[i]);
>>>>>>> workingBranch
      showModal();
      event.preventDefault();
    }
  }
}
// function who will opening the modale
function showModal() {
  myModal.show();
}

//create counter for textarea zone
let saisie = document.getElementById("comments");
let count = document.getElementById("count");
let maxlength = saisie.getAttribute("maxlength");

saisie.addEventListener("input", (event) => {
  let valueLength = event.target.value.length;
  let charLength = maxlength - valueLength;
  if (charLength < 0) return;
  count.innerText = charLength;
});
