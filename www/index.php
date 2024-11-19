<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0px;

        }

        form {
            margin: 20px;
        }

        label{
            width: 100px;
            display: inline-block;
        }

        .form-group{
            margin:20px 0px;
        }

    </style>
</head>

<body>

    <form action="process_form.php" method="post">
        <div class="form-group">
            <label for="voornaam">Voornaam</label>
            <input type="text" name="voornaam" id="voornaam" />
        </div>
        <div class="form-group">
            <label for="tussenvoegsel">Tussenvoegsel</label>
            <input type="text" name="tussenvoegsel" id="tussenvoegsel">
        </div>

        <div class="form-group">
            <label for="achternaam">Achternaam</label>
            <input type="text" name="achternaam" id="achternaam">
        </div>
        <div class="form-group">
            <label for="straat">Straat</label>
            <input type="text" name="straat" id="straat">
        </div>
        <div class="form-group">
            <label for="huisnummer">Huisnummer</label>
            <input type="text" name="huisnummer" id="huisnummer">
        </div>
        <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="text" name="postcode" id="postcode">
        </div>
        <div class="form-group">
            <label for="plaats">Plaats</label>
            <input type="text" name="plaats" id="plaats">
        </div>
        <div class="form-group">
            <label for="land">Land</label>
            <input type="text" name="land" id="land">
        </div>

        <button type="submit">Sla op</button>
        

    </form>




</body>

</html>