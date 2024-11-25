<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <form action="process_form.php" method="post">
        <div class="container">
            <div class="column">
                <div class="form-group">
                    <label for="voornaam">Voornaam</label>
                    <input type="text" name="voornaam" id="voornaam" placeholder="Uw voornaam aub">
                </div>
                <div class="form-group">
                    <label for="tussenvoegsel">Tussenvoegsel</label>
                    <input type="text" name="tussenvoegsel" id="tussenvoegsel">
                </div>

                <div class="form-group">
                    <label for="achternaam">Achternaam</label>
                    <input type="text" name="achternaam" id="achternaam">
                </div>

                <div class="form-group flex">
                    
                    <label for="red">Rood</label>
                    <input type="radio" name="kleur" id="red" value="red">
                    
                    <label for="green">Groen</label>
                    <input type="radio" name="kleur" id="green" value="green">

                    <label for="yellow">Geel</label>
                    <input type="radio" name="kleur" id="yellow" value="yellow">

                    <label for="blue">Blauw</label>
                    <input type="radio" name="kleur" id="blue" value="blue">
                </div>
            </div>
            <div class="column">
                <div class="form-group">
                    <label for="straat">Straat</label>
                    <input type="text" name="straat" id="straat" placeholder="Hier uw straat aub">
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
            </div>
            <div class="form-group">
                <label for="thema">Kies thema</label>
                <select name="thema" id="thema">
                    <option value="zakelijk">Zakelijk</option>
                    <option value="speels">Speels</option>
                    <option value="kleurrijk">Kleurrijk</option>
                </select>
                <div>
                    <label for="">Nieuwsbrief ontvangen?</label>
                    <input type="radio" name="nieuwsbrief" id="" value="ja">
                    <input type="radio" name="nieuwsbrief" id="" value="nee">
                </div>
                <div>
                    <label for="voetbal">Voetbal</label>
                    <input type="checkbox" name="hobby" id="voetbal">
                    <label for="schaken">Schaken</label>
                    <input type="checkbox" name="schaken" id="schaken">
                </div>
            </div>
          












        </div>
            <button type="submit">Sla op</button>
    </form>




</body>

</html>