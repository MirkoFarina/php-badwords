<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <!-- CON IL FORM INVIO I DATI ALLA MIA PAGINA DI ARRIVO, E LI MANDO TRAMITE POST COSì DA RENDERLI NON VISIBILI NEL URL -->
    <form action="./landing-page.php" method="POST">
        <label for="text">
            INSERISCI QUI IL TESTO 
        </label>
        <br>
        <textarea name="text" id="" cols="30" rows="5" placeholder="INSERISCI IL TESTO DA INVIARE ...">
            
        </textarea>
        <br>
        <label for="badword">
            INSERISCI LA PAROLA DA CENSURARE
        </label>
        <br>
        <input type="text" name="badword" placeholder="inserisci la parola da censurare">
        <br>
        <button type="submit">
            INVIA
        </button>
    </form>
</body>
</html>