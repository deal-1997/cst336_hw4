const express = require("express");
const  app = express();
app.engine('html', require('ejs').renderFile);
app.use(express.static("public"));


var fakerData = require("faker");
var randomName = fakerData.name.findName()
console.log(randomName);

app.get("/", function(req,res){
	res.render("index.html", {"fakerData":fakerData});
});

app.get("/c++", function(req,res){
	res.render("c++.html");
});

app.get("/java", function(req,res){
	res.render("java.html");
});

app.get("/javascript", function(req,res){
	res.render("javascript.html");
});

app.get("/python", function(req,res){
	res.render("python.html");
});


app.listen(process.env.PORT, process.env.IP, function(){
	console.log("Express server is running");
});







