const express = require('express')
const app = express()

const mysql = require('mysql');
const con = mysql.createConnection({
    host: "localhost",
    user: "esgi",
    password: "esgi",
    database : "esgi" });

con.connect(function(err) {
    if (err) throw err;
    console.log("Connecté à la base de données MySQL!");
    con.query( "SELECT * FROM users"); });


app.get('/users', (req,res) => {
    res.send("Liste des user")})

app.listen(4000, () => {
    console.log('Serveur à lécoute')
})


