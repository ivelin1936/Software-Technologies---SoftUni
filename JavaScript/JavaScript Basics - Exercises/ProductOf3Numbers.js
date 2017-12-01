function ProductOf3Numbers(arr) {
    arr = arr.map(Number);

    let br = 0;
    for (let i = 0; i < arr.length; i++) {
        if (arr[i] < 0) {
            br++;
        }
    }

    if (br % 2 !== 0) {
        console.log("Negative");
    } else {
        console.log("Positive");
    }
}