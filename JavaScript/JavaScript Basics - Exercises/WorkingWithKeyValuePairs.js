function workingWithKeyValuePairs(inputArr) {
    let result = {};

    for (let inputLine of inputArr) {
        let buffArr = inputLine.split(' ');

        if (buffArr.length > 1) {
            let keyStr = buffArr[0];
            let valueStr = buffArr[1];

            if (!result.hasOwnProperty(keyStr)) {
                result[keyStr] = valueStr;
            } else {
                result[keyStr] = valueStr;
            }
        } else {
            let keyStr = buffArr[0];

            if (result.hasOwnProperty(keyStr)) {
                console.log(result[keyStr]);
            } else {
                console.log("None")
            }
        }
    }
}

workingWithKeyValuePairs([
    "3 test",
    "3 test1",
    "4 test2",
    "4 test3",
    "4 test5",
    "4"
])
