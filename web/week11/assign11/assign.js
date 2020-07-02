const { Pool } = require('pg')
const express  = require('express')
const path = require('path');
const ejs = require('ejs');
require('dotenv').config();
process.env["NODE_TLS_REJECT_UNAUTHORIZED"] = 0;
const PORT = process.env.PORT || 5000
const connectionString = process.env.DATABASE || 'postgres://xhnacruhutziio:93756f037960410e78b10f3494bc8319bd7c439bad9b84e4d451b8395fa70858@ec2-52-20-248-222.compute-1.amazonaws.com:5432/dk89mah7flj2f?ssl=true'
const pool = new Pool({connectionString: connectionString});
const ResultsController = require('./model/controller.js');

express()
    .use(express.static(path.join(__dirname, 'public')))
    .use(express.urlencoded({extended: true}))
    .set('views', path.join(__dirname, 'views'))
    .set('view engine', 'ejs')
    .get('/', (req, res) => res.render('results'))
    .get('/cool', (req, res) => res.send(cool()))
    .get('/getResults', ResultsController.getResults)
    .get('/results', (req, res) => res.render('results'))
    .post('/getTable', ResultsController.getTable)
    .listen(PORT, () => console.log(`Listening on ${ PORT }`));
