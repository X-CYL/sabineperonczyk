//place le curseur dans le premier champ de formulaire
function focusOnFirstInput(){
    document.getElementById('nom').focus();
}

//vérifie que tous les champs sont bien remplis avant le submit
function isEmpty(){
let controlInput = document.getElementsByTagName('input');
    for(let i = 0; i < controlInput.length; i++){
        if (document.getElementsByTagName(controlInput[i]).value == "");
            modalAlert();
    }
}
function modalAlert(){
    let alert = document.getElementById('infos').style.visibility ="visible";
}
function annulModalAlert(){
    let alert = document.getElementById('infos').style.visibility= "hidden";
}
