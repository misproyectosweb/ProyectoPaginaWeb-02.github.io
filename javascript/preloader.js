/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function loader() {
    const contenedorLoader = document.querySelector('.contenedorLoader');

    contenedorLoader.style.opacity = 0;
    contenedorLoader.style.visibility = "hidden";
}

function fadeOut(){
  setInterval(loader, 3000);
}

window.onload = fadeOut();

