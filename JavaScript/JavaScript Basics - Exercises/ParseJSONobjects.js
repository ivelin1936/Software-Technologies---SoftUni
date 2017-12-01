function parseJSONobjects(inputArr) {
    for (let line of inputArr) {
        let jsonObj = JSON.parse(line);

        console.log("Name: " + jsonObj.name);
        console.log("Age: " + jsonObj.age);
        console.log("Date: " + jsonObj.date);
    }

}


parseJSONobjects(['{"name":"Gosho","age":10,"date":"19/06/2005"}', '{"name":"Tosho","age":11,"date":"04/04/2005"}']);