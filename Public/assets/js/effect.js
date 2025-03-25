"use strict";
//------------------------------------------------------------------------------ Efecto del Fondo ------------------------------------------------------------------------------
var testPosRaton = document.querySelector(".posicionMouse");
var output = document.querySelector(".iluminacion");

function marcarCoords(output, x, y) {
    // output.style.background = `radial-gradient(600px at ${x}px ${y}px, rgb(255, 255, 255))`;
    
    output.setAttribute('style', `background: radial-gradient(700px at ${x}px ${y}px, #3e7c6615, transparent 80%); height:${document.documentElement.scrollHeight}px;`)
}

function oMousePos(element, evt) {
    var ClientRect = element.getBoundingClientRect();
    return { //objeto
        x: Math.round(evt.clientX - ClientRect.left),
        y: Math.round(evt.clientY - ClientRect.top)
    }
}

testPosRaton.addEventListener("mousemove", function(evt) {
    var mousePos = oMousePos(testPosRaton, evt);
    marcarCoords(output, mousePos.x, mousePos.y);
}, false);