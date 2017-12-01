function solve(args) {
    for (item of args) {
        if (item === 'stop') {
            return;
        }

        console.log(item);
    }
}


solve(["Line 1", "Line 2", "Line 3", "stop", "Line 5", "Line 6"]);