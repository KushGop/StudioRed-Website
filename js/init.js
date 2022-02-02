const pug = require('pug');
const express = require('express');
const app = express();
const path = require('path');

const local = 3000;

app.set("view engine", "pug");

app.use('/', function (req, res, next) {
    console.log('Request Type:', req.method+req.originalUrl)
    next()
  })

app.get("/", (req,res,next) => { res.render("home")})

let imageRouter = require('./image-router');
app.use("/resources",imageRouter);
//images
// app.get('/studioRedLogo.PNG',function(req,res){
//     res.sendFile(path.join(__dirname + '/studioRedLogo.PNG'))
// })

app.listen(3000);
console.log("Server listening at http://localhost:3000");