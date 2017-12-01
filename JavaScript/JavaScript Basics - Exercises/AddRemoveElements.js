function addRemoveElements(arr) {
    let resultArr = [];

    for (let line of arr) {
        let buffArr = line.split(' ');
        let command = buffArr[0];

        if (command === "add") {
            let number = Number(buffArr[1]);
            resultArr.push(number);
        }
        else if (command === "remove") {
            let index = Number(buffArr[1]);
            if (index > -1 && index < resultArr.length) {
                resultArr.splice(index, 1);
            }
        }
    }

    for (let num of resultArr) {
        console.log(num);
    }
}

addRemoveElements([
    "add 3",
    "add 5",
    "remove 2",
    "remove 0",
    "add 7"
])