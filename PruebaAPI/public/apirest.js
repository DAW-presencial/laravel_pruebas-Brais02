/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

function api_js_index() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
       /* var respuesta = xhttp.responseText;
        respuest = JSON.parse(respuesta);
        //respuesta.forEach(crearElementos);*/
        
        document.getElementById('resultado').innerHTML = xhttp.responseText;
    };
    xhttp.open('GET', 'index.php/api/apirest', true);
//xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json')
//xhttp.setRequestHeader('Accept', 'application/vnd.api+json')
    xhttp.send();

}


function crearElementos(item) {
    
    var pais = JSON.parse(item)
    
}