var radius : number = 5;
var pi : number = 3.14;
var ans : number = 0;


function Area(radius:number, pi:number) : number{
    return pi* radius *radius;
}

var ans = Area(radius, pi);

console.log('Area of circle is ', ans);