// Operadores en JS

// Igualdad
console.log( 1 == 1 ); // 1 == 1 ; true == true
console.log( 1 == true ); // == comparo igualdad
console.log( 1 === true ); // === comparo identidad

console.log('1' == 1); // '1' es string mientas que 1 es number
console.log('1' === 1); // '1' es string mientas que 1 es number

console.log( 10 != 10 ); // 
console.log( 10 !== '10' ); // 

// Operadores unitarios
let count = 100;
// ++variable: Operador PRE incremento
// variable++: Operador POST incremento
// --varibale: Operador PRE decremento
// varibale--: Operador POST decremento
console.log(++count);
console.log(count++);
console.log(count); // debería mostrar el 102

// Operadores lógicos
// && -> and  ; || -> or
// && -> ambos verdaderos para que sea verdadero
// || -> al menos un verdadero para que sea verdadero
// AND (&&)
if ( 10 === 10 && 20 === 21 ){
    console.log('verdadero');
}else{
    console.log('falso');
}

// OR (||)
if ( 10 === 10 || 20 === 21 ){
    console.log('verdadero');
}else{
    console.log('falso');
}


// Operadores de asignación
// += , -= , =
let counter = 200;
counter += 10; // counter = counter + 10
console.log('counter', counter);
counter -= 10; // counter = counter - 10
console.log('counter', counter);

// Operadores relacionales
// <, >, <=, >= 
const result = (2 >= 3); // true o false
console.log('result', result);