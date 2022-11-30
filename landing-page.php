<?php  
    // Prendo il testo che mi arriva dal form nella page index
    $text = $_POST['text'];

    // Prendo la lunghezza del testo che mi viene passato
    $length_text = strlen($text);

    // Censuro la badword 
    $censured_text = str_replace('cane', '****', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h2>
        Questo è il tuo testo senza censure:
    </h2>
    <span>
        Il tuo testo é lungo: <?php echo $length_text ?> caratteri
    </span>
    <p>
        <?php echo $text ?>
    </p>

    <!-- STAMPO IL TESTO CON LA PAROLA CENSURATA -->
    <h2>
        Questo è il tuo testo censurato:
    </h2>
    <span>
        Il tuo testo é lungo: <?php echo $length_text ?> caratteri
    </span>
    <p>
        <?php echo $censured_text ?>
    </p>
</body>
</html>