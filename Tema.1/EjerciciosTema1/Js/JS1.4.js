let nota = parseFloat(prompt("Dime tu nota: "));
let resultado= nota>0&&nota<=2?"Muy deficiente":nota<5?"Insuficiente":
nota<6?"Suficiente":nota<7?"Bien":nota<9?"Notable":"Sobresaliente";
console.log(resultado);