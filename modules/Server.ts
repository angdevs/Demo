// Class Declaration
export class Arithematic
{
    // Characteristics
    No1 : number;
    No2 : number;
    No3 : number;
    ans : number;
    // Behaviour
    constructor(x : number, y : number)
    {
        this.No1 = x;
        this.No2 = y;
        this.ans = 0;
    }
    Addition(): number 
    {
        this.ans = this.No1 + this.No2;
        return this.ans;
    }
    Substraction(): number 
    {
        this.ans = this.No1 - this.No2 - this.No3;
        return this.ans;
    }
}

export function Addition(no1:number, no2:number) :number {
    var ans = no1+no2;
    return ans;
}

export function Substract(no1:number, no2:number) :number {
    var ans = no1-no2;
    return ans;
}


export var fun = function(no1:number, no2:number ) 
{
    return no1+no2;
}

export var func = (no1:number, no2:number) =>{
    return no1+no2;
}