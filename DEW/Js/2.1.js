function inverso() {
const numero = parseInt(document.getElementById('numero').value);
const parrafo = document.getElementById('Prueba');
let cadena = numero.toString();
let aux='';
parrafo.innerHTML='';

for (let i = 0; i < cadena.length; i++) {
    aux+=cadena.charAt(cadena.length-(i+1));
    
}
 parrafo.innerHTML=aux;   
}
inverso();