function printNumbersFrom1toN(arr) {
    arr = arr.map(Number);
    let number = arr[0];

    for (let i = 1; i <= number; i++) {
        console.log(i);
    }
}

printNumbersFrom1toN(["5"]);