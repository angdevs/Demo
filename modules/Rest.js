var no1 = 10;
var no2 = 20;
function rest() {
    var args = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        args[_i] = arguments[_i];
    }
    return no1 + no2;
}
var ans = rest(no1, no2, 10);
console.log("ans is ", ans);
