function setValuesToIndex(arr) {
    let arrLength = Number(arr[0]);
    let resultArr = [];

    for (let i = 0; i < arrLength; i++) {
        resultArr.push(0);
    }

    for (let i = 1; i < arr.length; i++) {
        let buffArr = arr[i].split(" - ");
        let index = buffArr[0];
        let number = buffArr[1];

        resultArr[index] = number;
    }

    for (let element of resultArr) {
        console.log(element);
    }
}

setValuesToIndex(["5", "0 - 3", "3 - -1", "4 - 2"]);