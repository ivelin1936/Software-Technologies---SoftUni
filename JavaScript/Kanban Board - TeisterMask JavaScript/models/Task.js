const mongoose = require('mongoose');

let taskSchema = mongoose.Schema({
    //You don't need to set Id in JavaScript, Datebase create it alone
	title: {type: "string", required: "true"},
	status: {type: "string", required: "true"}
});

let Task = mongoose.model('Task', taskSchema);

module.exports = Task;