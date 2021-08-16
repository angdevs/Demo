var no1:number = 10;
var no2:number = 20;

function rest(...args){
    return no1+no2;
}

var ans = rest(no1,no2,10);
console.log("ans is ", ans);