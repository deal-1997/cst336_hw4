const express = require("express");
var faker = require('faker');
var randomName = faker.name.findName();

const app = express();
app.engine('html', require('ejs').renderFile);
app.use(express.static("public"));

//routes
app.get("/", function(req, res){
    res.render("index.ejs", {"randomName": randomName});
});

app.get("/c++", function(req, res){
    res.render("c++.ejs", {"randomName": randomName});
});

app.get("/java", function(req, res){
    res.render("java.ejs", {"randomName": randomName});
});

app.get("/javascript", function(req, res){
    res.render("javascript.ejs", {"randomName": randomName});
});

app.get("/python", function(req, res){
    res.render("python.ejs", {"randomName": randomName});
});

app.listen(process.env.PORT, process.env.IP, function(){
    console.log("Express server is running...");
});