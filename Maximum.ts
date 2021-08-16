var no1 : number = 1;
var no2 : number = 5;
var no3 : number = 2;

function Maximum(...args) : any { 
    var largest : number = 0;
    args.forEach(element => { 
         if (element > largest) { 
              largest = element;   
         }  
     });
        return largest;
    } 
 
var ans = Maximum(no1, no2, no3, 4);
console.log('largest value hai ye ->', ans);
