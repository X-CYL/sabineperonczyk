//place le curseur dans le premier champ de formulaire
function focusOnFirstInput(){
    document.getElementById('nom').focus();
}
//focus sur le premier champ de saisie
let focusLine = document.getElementsByTagName('body');
focusLine.addEventListener('load',focusOnFirstInput())

//vérifie que tous les champs sont bien remplis avant le submit
function isEmpty(){
let controlInput = document.getElementsByTagName('input');
    for(let i = 0; i < controlInput.length; i++){
        if (document.getElementsByTagName(controlInput[i]).value == "");
            modalAlert();
    }
}
