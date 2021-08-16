var no1 : number = 20; 

function DisplayFactors(no1:number)  : any{
    var array_name:number[];        //declaration 
    for (let index = 0; index < no1;  index++) { 
       if (no1 % index == 0) {
        this.array_name.push(index);
       }
    }
    return array_name;
}

console.log('working');
var ans = DisplayFactors(no1);
console.log('Output is ', ans);