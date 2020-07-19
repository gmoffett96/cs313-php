const { Pool } = require('pg')
const connectionString = process.env.DATABASE || 'postgres://xhnacruhutziio:93756f037960410e78b10f3494bc8319bd7c439bad9b84e4d451b8395fa70858@ec2-52-20-248-222.compute-1.amazonaws.com:5432/dk89mah7flj2f?ssl=true'
const pool = new Pool({connectionString: connectionString});

function getResults(req, res) {
    var sql = "SELECT * FROM users";

    pool.query(sql, function (err, results) {
        // If an error occurred...
        if (err) {
            console.log("Error in query: ")
            console.log(err);
        }

        // Log this to the console for debugging purposes.
        console.log("Back from DB with result:");
        console.log(results);

        res.json(results);
    });
}

function getTable(req, res) {
    var sql = "SELECT * FROM users";

    pool.query(sql, function (err, results) {
        // If an error occurred...
        if (err) {
            console.log("Error in query: ")
            console.log(err);
        }

        // Log this to the console for debugging purposes.
        console.log("Back from DB with result:");
        console.log(results);

        res.json(results);
    });
}

module.exports = {
    getResults: getResults,
    getTable: getTable
};