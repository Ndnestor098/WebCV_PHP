"use strict";

//------------------------------------------------------------------------------ Control del Menu ------------------------------------------------------------------------------
const classMenu = ["home-nav","about-nav","experiences-nav","projects-nav","certificates-nav"]; // Nombre de las clases

for (let x = 0; x < classMenu.length; x++) { //Activamos un bucle que lee todas las clases
    document.getElementById(classMenu[x]).addEventListener("click", ()=>{
        classDelete();

        classAdd(classMenu[x]);
    })
}

//Activamos el elemento clickeado agregando las clases con un tiempo de espera de 0 segundo, ya que tiene un bug con el css, esto para que la animacion funcione
const classAdd = (element) => {
    let targetElement = document.getElementById(element);

    if (targetElement) {
        // Activa la clase en el <li>
        targetElement.classList.add("activate-li");

        // Busca el <img> y el <a> dentro de este <li> específico
        let imgElement = targetElement.querySelector("img");
        let anchorElement = targetElement.querySelector("span");

        // Activa las clases en los elementos correspondientes si existen
        if (imgElement) {
            imgElement.classList.add("activate-i");
        }
        if (anchorElement) {
            anchorElement.classList.add("activate-a");
        }
    } else {
        console.error(`El elemento con ID '${element}' no existe en el DOM.`);
    }
};

//Con esta funcion eliminamos las clases de los botones del menu
const classDelete = () => {
    for (let x = 0; x < classMenu.length; x++) {
        let targetElement = document.getElementById(classMenu[x]);

        if (targetElement) {
            // Desactiva la clase en el <li>
            targetElement.classList.remove("activate-li");

            // Busca el <img> y el <a> dentro de este <li> específico
            let imgElement = targetElement.querySelector("img");
            let anchorElement = targetElement.querySelector("span");

            // Desactiva las clases en los elementos correspondientes si existen
            if (imgElement) {
                imgElement.classList.remove("activate-i");
            }
            if (anchorElement) {
                anchorElement.classList.remove("activate-a");
            }
        }
    }
};


//-------------------------------- Control de idioma --------------------------------
const lang = document.getElementById('lenguague');
const hiddenLang = document.getElementById('cancel');

lang.addEventListener('click', ()=>{
    document.getElementById('content-lenguague').style.display = "block";
});

hiddenLang.addEventListener('click', ()=>{
    document.getElementById('content-lenguague').style.display = "none";
})