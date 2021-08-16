class car{
    name : string = 'Roll Royce';

    travel() {
        console.log('drive');    
    }
}

class bmw extends car{
    price(name){
        console.log('price is 100000 & name is', name);
    }
}

var obj1 = new bmw();
var res = obj1.price("Honda");
console.log('obj1 is', res);