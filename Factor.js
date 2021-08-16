var no1 = 20;
function DisplayFactors(no1) {
    var array_name; //declaration 
    for (var index = 0; index < no1; index++) {
        if (no1 % index == 0) {
            this.array_name.push(index);
        }
    }
    return array_name;
}
console.log('working');
var ans = DisplayFactors(no1);
console.log('Output is ', ans);
