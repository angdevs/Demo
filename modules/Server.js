"use strict";
exports.__esModule = true;
exports.func = exports.fun = exports.Substract = exports.Addition = exports.Arithematic = void 0;
// Class Declaration
var Arithematic = /** @class */ (function () {
    // Behaviour
    function Arithematic(x, y) {
        this.No1 = x;
        this.No2 = y;
        this.ans = 0;
    }
    Arithematic.prototype.Addition = function () {
        this.ans = this.No1 + this.No2;
        return this.ans;
    };
    Arithematic.prototype.Substraction = function () {
        this.ans = this.No1 - this.No2 - this.No3;
        return this.ans;
    };
    return Arithematic;
}());
exports.Arithematic = Arithematic;
function Addition(no1, no2) {
    var ans = no1 + no2;
    return ans;
}
exports.Addition = Addition;
function Substract(no1, no2) {
    var ans = no1 - no2;
    return ans;
}
exports.Substract = Substract;
var fun = function (no1, no2) {
    return no1 + no2;
};
exports.fun = fun;
var func = function (no1, no2) {
    return no1 + no2;
};
exports.func = func;
