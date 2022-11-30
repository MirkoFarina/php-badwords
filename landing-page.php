<?php  
    // Prendo il testo che mi arriva dal form nella page index
    $text = $_POST['text'];
    $badword = $_POST['badword'];

    // Prendo la lunghezza del testo che mi viene passato
    $length_text = strlen($text);

    // Censuro la badword 
    $censured_text = str_replace( $badword, '****', $text);

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
        Il tuo testo è lungo: <?php echo $length_text ?> caratteri
    </span>
    <p>
        <?php echo $text ?>
    </p>

    <!-- STAMPO IL TESTO CON LA PAROLA CENSURATA -->
    <h2>
        La parola da censurare scelta da te è: <?php echo $badword  ?> <br>
        Questo è il tuo testo censurato:
    </h2>
    <span>
        Il tuo testo è lungo: <?php echo $length_text ?> caratteri
    </span>
    <p>
        <?php echo $censured_text ?>
    </p>
</body>
</html>