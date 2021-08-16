import {Arithematic, Addition, Substract, fun, func} from "./Server"
    
var no1 : number = 10; 
var no2 : number = 15;
var ret : number = 0;
ret = Addition(no1, no2);
console.log('Addition is', ret);

ret = Substract(no1, no2);
console.log('substarct is', ret);
    
    
ret = fun(no1, no2);
console.log('anonymous fun is', ret);  

ret = func(10,15);
console.log("Arrow ans is ", ret);



var ret : number = 0;
var obj1 = new Arithematic(10,11); //dynamic
var obj2 = new Arithematic(20,11); //dynamic
ret = obj1.Addition();
console.log("Addition of obj1 is : ",ret);
ret = obj2.Addition();
console.log("Addition of obj2 is : ",ret);
