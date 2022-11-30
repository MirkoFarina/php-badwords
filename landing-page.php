<?php  
    $text = $_POST['text'];

    $length_text = strlen($text);
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
    <span>
        Il tuo testo é lungo: <?php echo $length_text ?> caratteri
    </span>
    <p>
        <?php echo $text ?>
    </p>
</body>
</html>