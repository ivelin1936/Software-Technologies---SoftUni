function printNumbersReverse(arr) {
    arr = arr.map(Number);
    arr.reverse();

    for (let num of arr) {
        console.log(num);
    }
}