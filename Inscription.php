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
                <label for="Nom">Nom</label><input type="text" name="Nom" id="Nom" required>
                <br>
                <label for="Prenom">Prenom</label><input type="text" name="prenom" id="prenom" required>
                <br>
                <label for="Date_naissance">Date_naissance</label><input type="date" name="Date_naissance" id="Date_naissance" required>
                <br>
                <label for="Email">Email</label><input type="email" name="Email" id="Email" required>
                <br>
                <label for="tel">Tel</label><input type="tel" id="tel" required>
                <label for="password">Mot de passe</label><input type="password" id="password" required>
                <input type="reset" value="Effacer">
                <input type="submit" value="Valider">

                
            </fieldset>
        </form>
    </div>

    <footer>

    </footer>
    <style>
        /* design formulaire  */
        Body{
            color: white;
        }
        .form_container {
            background-image: url('images4.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 50px;
        }
        /*center */
        form{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
        }
        input[type ="submit"]{
               width: 70px;
               height: 25px;
        }
        input[type ="reset"]{
               width: 70px;
               height: 25px;
        }

        #field {
            width: 200px;
            height: 320px;
            padding: 15px;
        }
        input {
            margin: 5px;

        }
        h1{
            text-align: center;
            font-size: 40px;
        }
    </style>
</body>

</html>