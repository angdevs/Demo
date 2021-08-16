"use strict";
exports.__esModule = true;
var Server_1 = require("./Server");
var no1 = 10;
var no2 = 15;
var ret = 0;
ret = Server_1.Addition(no1, no2);
console.log('Addition is', ret);
ret = Server_1.Substract(no1, no2);
console.log('substarct is', ret);
ret = Server_1.fun(no1, no2);
console.log('anonymous fun is', ret);
ret = Server_1.func(10, 15);
console.log("Arrow ans is ", ret);
var ret = 0;
var obj1 = new Server_1.Arithematic(10, 11); //dynamic
var obj2 = new Server_1.Arithematic(20, 11); //dynamic
ret = obj1.Addition();
console.log("Addition of obj1 is : ", ret);
ret = obj2.Addition();
console.log("Addition of obj2 is : ", ret);
