function multiplyDivideNumber(arr) {
    arr = arr.map(Number);
    let n = arr[0];
    let x = arr[1];

    let result = 0;
    if (x >= n) {
        result = x * n;
    } else {
        result = n / x;
    }

    return result;
}

console.log(multiplyDivideNumber(["2", "3"]));