// Class Declaration
class Sacha
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
        this.ans = this.No1 - this.No2;
        return this.ans;
    }
}
var ret : number = 0;
var obj1 = new Sacha(10,11); //dynamic
var obj2 = new Sacha(20,11); //dynamic
ret = obj1.Addition();
console.log("Addition of obj1 is : ",ret);
ret = obj2.Addition();
console.log("Addition of obj2 is : ",ret);
