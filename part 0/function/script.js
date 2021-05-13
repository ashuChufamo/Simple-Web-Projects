
// working when the function is below the calling 
/*
var sum = sum(2,3);
alert(sum);
*/
// not working when anonomouse function is below calling

var doSomething = function(paramOne,
    paramTwo, func) {
    paramOne = paramOne + 3;
    paramOne = paramOne + 1;
    paramOne = paramOne * 8;
    return func(paramOne, paramTwo);
};

var sum = doSomething(2,3,sum);
var substract = doSomething(2,3,
    substract);
var product = doSomething(2,3,product);

alert(sum);
alert(substract);
alert(product);

function sum(paramOne,paramTwo) {
    return paramOne + paramTwo;
}

function substract(paramOne,paramTwo) {
    return paramOne - paramTwo;
}

function product(paramOne,paramTwo) {
    return paramOne*paramTwo;
}

/*
var doSomething = function(paramOne, paramTwo, func) {
    paramOne = paramOne + 3;
    paramOne = paramOne + 1;
    paramOne = paramOne * 8;
    
    return func(paramOne, paramTwo);
};

function sum(paramOne, paramTwo) {
    return paramOne + paramTwo;
}
var foo = doSomething(2,2,sum);
alert(foo);
*/

/*


// set one
var foo = doSomething(2, 2, sum); // 96

// set two
var bar = doSomething(3, 2, function(paramOne, paramTwo) {
    return paramOne * paramTwo;    
}); // 112

 alert(foo);
alert(bar);
*/
