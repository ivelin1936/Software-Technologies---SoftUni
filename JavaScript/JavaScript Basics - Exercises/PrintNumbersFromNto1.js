function printNumbersFromNto1(arr) {
    arr = arr.map(Number);
    let num = arr[0];

    for (let i = num; i >= 1; i--) {
        console.log(i);
    }
}

printNumbersFromNto1(["5"]);