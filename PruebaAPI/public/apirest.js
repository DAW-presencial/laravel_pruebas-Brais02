/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

function api_js_index(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function (){
    document.getElementById('resultado').innerHTML = xhttp.responseText;
};
xhttp.open('GET', '/api', true);
//xhttp.setRequestHeader('Content-Type', 'application/vnd.api+json')
//xhttp.setRequestHeader('Accept', 'application/vnd.api+json')
xhttp.send();

}

