function storingObjects(inputArr) {
    let persone = [];
    for (let inputLine of inputArr) {
        let buffArr = inputLine.split(' -> ');
        let name = buffArr[0];
        let age = Number(buffArr[1]);
        let grade = Number(buffArr[2]);

        persone.push({Name: name, Age: age, Grade: (grade).toFixed(2)});
    }

    persone.forEach(p => {
        console.log("Name: " + p.Name);
        console.log("Age: " + p.Age);
        console.log("Grade: " + p.Grade);
    })
}

storingObjects([
    "Pesho -> 13 -> 6.00",
    "Ivan -> 12 -> 5.57",
    "Toni -> 13 -> 4.90"
]);