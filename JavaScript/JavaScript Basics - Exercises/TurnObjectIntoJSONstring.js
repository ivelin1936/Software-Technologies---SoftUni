function TurnObjectIntoJSONstring(inputArr) {
    "use strict";
    var obj = {};
    obj.name = inputArr[0].split(" -> ")[1];
    obj.surname = inputArr[1].split(" -> ")[1];
    obj.age = Number(inputArr[2].split(" -> ")[1]);
    obj.grade = Number(inputArr[3].split(" -> ")[1]);
    obj.date = inputArr[4].split(" -> ")[1];
    obj.town = inputArr[5].split(" -> ")[1];

    return JSON.stringify(obj);
}

console.log(TurnObjectIntoJSONstring(["name -> Angel", "surname -> Georgiev", "age -> 20", "grade -> 6.00", "date -> 23/05/1995", "town -> Sofia"]));