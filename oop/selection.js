function sequence() {
    console.log('Demonstration of sequence');
    var arr = [10, 20, 30, 40];
    console.log(arr[0]);
    console.log(arr[1]);
    console.log(arr[2]);
    console.log(arr[3]);
}
function iteration() {
    console.log('Demonstration of iteration');
    var arr = [10, 20, 30, 40];
    var iCnt = 0;
    var iSum = 0;
    iSum = iSum + arr[0];
    iSum = iSum + arr[1];
    iSum = iSum + arr[2];
    iSum = iSum + arr[3];
    return iSum;
}
var iRet = 0;
iRet = iteration();
console.log('addition is', iRet);
function iteration1() {
    console.log('Demonstration of iteration1');
    var arr = [10, 20, 30, 40];
    var iCnt = 0;
    var iSum = 0;
    for (iCnt = 0; iCnt < arr.length; iCnt++) {
        iSum = iSum + arr[iCnt];
        console.log('iSum', iSum);
    }
    return iSum;
}
var iRet = 0;
iRet = iteration1();
console.log('addition is', iRet);
function iteration2() {
    console.log('Demonstration of iteration1');
    var arr = [10, 20, 30, 40];
    var iValue = 0;
    var iSum = 0;
    for (var _i = 0, arr_1 = arr; _i < arr_1.length; _i++) {
        iValue = arr_1[_i];
        iSum = iSum + iValue;
    }
    return iSum;
}
var iRet = 0;
iRet = iteration2();
console.log('addition is iteration2', iRet);
function iteration3() {
    console.log('Demonstration of iteration1');
    var arr = [10, 20, 30, 40];
    var iIndex = 0;
    var iSum = 0;
    for (var iIndex_1 in arr) {
        iSum = iSum + arr[iIndex_1];
    }
    return iSum;
}
var iRet = 0;
iRet = iteration3();
console.log('addition is iteration3', iRet);
//sequence();
function iteration4() {
    console.log('Demonstration of iteration14');
    var arr = [10, 20, 30, 40];
    var iIndex = 0;
    var iSum = 0;
    for (var iIndex_2 in arr) {
        iSum = iSum + arr[iIndex_2];
    }
    return iSum;
}
var iRet = 0;
iRet = iteration4();
console.log('addition is iteration3', iRet);
//sequence();
function iteration5() {
    console.log('Demonstration of iteration1');
    var arr = [10, 20, 30, 40];
    var iCnt = 0;
    var iSum = 0;
    while (iCnt < arr.length) {
        iSum = iSum + arr[iCnt]; // no 2
        iCnt++; /// no 3
    }
    return iSum;
}
var iRet = 0;
iRet = iteration5();
console.log('addition is iteration5', iRet);
function iteration6() {
    console.log('Demonstration of iteration6');
    var arr = [10, 20, 30, 40];
    var iCnt = 0;
    var iSum = 0;
    // while(iCnt< arr.length){
    //     iSum = iSum + arr[iCnt]; // no 2
    //     iCnt++; /// no 3
    // }
    do {
        iSum = iSum + arr[iCnt]; // no 2
        iCnt++; /// no 3
    } while (iCnt < arr.length);
    return iSum;
}
var iRet = 0;
iRet = iteration6();
console.log('addition is iteration6', iRet);
// if else if ladder (shidi)
function compare(iNo1, iNo2) {
    if (iNo1 > iNo2) {
        console.log('First is Greater');
    }
    else if (iNo1 < iNo2) {
        console.log('Seconnd is Greater');
    }
    else if (iNo1 == iNo2) {
        console.log('Both are equal');
    }
}
compare(100, 100);
function Myday(myDate) {
    if (myDate == 1) {
        console.log('Monday');
    }
    else if (myDate == 2) {
        console.log('Tuesday');
    }
    else if (myDate == 3) {
        console.log('Wednesday');
    }
}
Myday(3);
function Myday2(myDate) {
    switch (myDate) {
        case 1:
            console.log('Monday');
            break;
        case 2:
            console.log('Tuesday');
            break;
        case 3:
            console.log('Switch ans is Wednesday');
        default:
            console.log('Switch ans is out of range');
            break;
    }
}
Myday2(3);
