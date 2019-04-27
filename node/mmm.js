function add (x , y){
    return x + y;
}

function multiply(x,y){
    return x * y
}

function factorial(n){
    return n === 0 ? 1 : n * factorial(n-1)
}


(function(exports,require, module, __filename, __dirname){
    
    exports.add = add
    exports.multiply = multiply
    exports.factorial = factorial
    exports.now = Date.now()
})
