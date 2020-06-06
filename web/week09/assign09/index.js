const cool = require('cool-ascii-faces');
const express = require('express');
const path = require('path');
const PORT = process.env.PORT || 5000;


express()
    .use(express.static(path.join(__dirname, 'public')))
    .set('views', path.join(__dirname, 'views'))
    .set('view engine', 'ejs')
    .get('/', (req, res) => res.render('pages/calc'))
    .get('/results', handleCalc)
    .get('/cool', (req, res) => res.send(cool()))
    .listen(PORT, () => console.log(`Listening on ${ PORT }`));
    
    function handleCalc (req, res){
        const ounces = parseFloat(req.query.ounces);
        const letterType = req.query.letterType;
        const letter = req.query.letter;
        Calculate(res, ounces, letterType, letter);
    }

    function Calculate (res, ounces, letterType, letter) {
        var cost = 0;
        if (letterType == "stamped")
        {
            letterType = "Letters (Stamped)";
            if (ounces == 1)
            {
                cost = 0.55;
            }
            else if (ounces == 2)
            {
                cost = 0.70;
            }
            else if (ounces == 3)
            {
                cost = 0.85;
            }
            else
            {
                cost = 1.00;
            }
        }
        else if (letterType == "metered")
        {
            letterType = "Letters (Metered)";
            if (ounces == 1)
            {
                cost = 0.50;
            }
            else if (ounces == 2)
            {
                cost = 0.65;
            }
            else if (ounces == 3)
            {
                cost = 0.80;
            }
            else
            {
                cost = 0.95;
            }
        }
        else if (letterType == "flats")
        {
            letterType = "Large Envenlopes (Flats)";
            if (ounces == 1)
            {
                cost = 1.00;
            }
            else if (ounces == 2)
            {
                cost = 1.20;
            }
            else if (ounces == 3)
            {
                cost = 1.40;
            }
            else if (ounces == 4)
            {
                cost = 1.60;
            }
            else if (ounces == 5)
            {
                cost = 1.80;
            }
            else if (ounces == 6)
            {
                cost = 2.00;
            }
            else if (ounces == 7)
            {
                cost = 2.20;
            }
            else if (ounces == 8)
            {
                cost = 2.40;
            }
            else if (ounces == 9)
            {
                cost = 2.60;
            }
            else if (ounces == 10)
            {
                cost = 2.80;
            }
            else if (ounces == 11)
            {
                cost = 3.00;
            }
            else if (ounces == 12)
            {
                cost = 3.20;
            }
            else if (ounces == 13)
            {
                cost = 3.40;
            }
        }
        else if (letterType == "first")
        {
            letterType = "First-Class Package Service-Retail";
            if (ounces == 1 || ounces == 2 || ounces == 3 || ounces == 4)
            {
                cost = 3.80;
            }
            else if (ounces == 5 || ounces == 6 || ounces == 7 || ounces == 8) 
            {
                cost = 4.60;
            }
            else if (ounces == 9 || ounces == 10 || ounces == 11 || ounces == 12)
            {
                cost = 5.30;
            }
            else 
            {
                cost = 5.90;
            }
        }
        parameters = { ounces: ounces, letterType: letterType, letter: letter, cost: cost};
        res.render("pages/results", parameters);
    }
