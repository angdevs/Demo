var no1 = 1;
var no2 = 5;
var no3 = 2;
function Maximum() {
    var args = [];
    for (var _i = 0; _i < arguments.length; _i++) {
        args[_i] = arguments[_i];
    }
    var largest = 0;
    args.forEach(function (element) {
        if (element > largest) {
            largest = element;
        }
    });
    return largest;
}
var ans = Maximum(no1, no2, no3, 4);
console.log('largest value hai ye ->', ans);
