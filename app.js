const express = require("express");
const  app = express();
app.engine('html', require('ejs').renderFile);
app.use(express.static("public"));


var fakerData = require("faker");
var randomName = fakerData.name.findName()
console.log(randomName);

app.get("/", function(req,res){
	res.render("index.php", {"fakerData":fakerData});
});

app.get("/c++", function(req,res){
	res.render("c++.php");
});

app.get("/java", function(req,res){
	res.render("java.php");
});

app.get("/javascript", function(req,res){
	res.render("javascript.php");
});

app.get("/python", function(req,res){
	res.render("python.php");
});


app.listen(process.env.PORT, process.env.IP, function(){
	console.log("Express server is running");
});







