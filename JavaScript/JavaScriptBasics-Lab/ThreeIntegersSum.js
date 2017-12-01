function threeIntegersSum([input]) {
    input = input.split(' ');

    let  num1 = Number(input[0]);
    let  num2 = Number(input[1]);
    let  num3 = Number(input[2]);

    if ((num1 + num2) == num3) {
        let sum = num1 + num2;
        console.log(`${Math.min(num1, num2)} + ${Math.max(num1, num2)} = ${sum}`);
    }
    else if ((num1 + num3) == num2) {
        let sum = num1 + num3;
        console.log(`${Math.min(num1, num3)} + ${Math.max(num1, num3)} = ${sum}`);
    }
    else if ((num2 + num3) == num1) {
        let sum = num2 + num3;
        console.log(`${Math.min(num2, num3)} + ${Math.max(num2, num3)} = ${sum}`);
    } else {
        console.log('No');
    }
}

let sum = threeIntegersSum(['5', '4']);
console.log(sum);