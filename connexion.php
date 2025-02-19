<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form_container">
        <h1>VOYAGER DOIT POUVOIR ETRE SANS DANGER</h1>
        <form action="get">
            <fieldset id="field">
                <label for="Email">Email</label><input type="email" name="Email" id="Email" required>
                <br>
                <label for="password">Mot de passe</label><input type="password" id="password" required>
                <br>
                <input type="reset" value="Effacer">
                <input type="submit" value="Valider">
            </fieldset>
        </form>
    </div>
    <style>
        body {
            background-image: url("images4.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            text-align: center;
            font-size: 50px;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50vh;
            position: relative;
            
        }
        
        
    </style>

</body>

</html>