var no : number = 21;
let fibonacci = [0,1];


function Fibbo(no:number) : any{ 
    for (let i = 1; i < no; i++) {    
            fibonacci.push(fibonacci[i] + fibonacci[i - 1]);
        }
        console.log(fibonacci);
    }   
     

var ans = Fibbo(no); 