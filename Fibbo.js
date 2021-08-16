var no = 21;
var fibonacci = [0, 1];
function Fibbo(no) {
    for (var i = 1; i < 21; i++) {
        fibonacci.push(fibonacci[i] + fibonacci[i - 1]);
    }
    console.log(fibonacci);
}
var ans = Fibbo(no);
