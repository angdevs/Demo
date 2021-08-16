var __extends = (this && this.__extends) || (function () {
    var extendStatics = function (d, b) {
        extendStatics = Object.setPrototypeOf ||
            ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
            function (d, b) { for (var p in b) if (Object.prototype.hasOwnProperty.call(b, p)) d[p] = b[p]; };
        return extendStatics(d, b);
    };
    return function (d, b) {
        if (typeof b !== "function" && b !== null)
            throw new TypeError("Class extends value " + String(b) + " is not a constructor or null");
        extendStatics(d, b);
        function __() { this.constructor = d; }
        d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
    };
})();
var car = /** @class */ (function () {
    function car() {
        this.name = 'Roll Royce';
    }
    car.prototype.travel = function () {
        console.log('drive');
    };
    return car;
}());
var bmw = /** @class */ (function (_super) {
    __extends(bmw, _super);
    function bmw() {
        return _super !== null && _super.apply(this, arguments) || this;
    }
    bmw.prototype.price = function (name) {
        return console.log('price is 100000 & name is', name);
    };
    return bmw;
}(car));
var obj1 = new bmw();
var res = obj1.price("Honda");
console.log('obj1 is', res);
