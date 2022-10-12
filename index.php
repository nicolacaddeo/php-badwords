<?php
    $text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam debitis dolore in pariatur explicabo quia ad, quidem laborum quibusdam assumenda repellat recusandae, ea hic dolor, esse id modi aut nam.";
    $textLenght = strlen($text);
    $wordToHide = $_GET['word'];
    $censorShip = '***';
    $newText = str_replace($wordToHide, $censorShip, $text);
    $newTextLenght = strlen($newText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhP Badwords</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/my_style.css">
</head>
<body>
    <div class="container">
       <div id="original-text">
            <p><?= $text ?></p>
            <strong class="text-lenght">La lunghezza del paragrafo è: <?= $textLenght ?></strong>
       </div>
       <div id="text-to-hide">
            <span>La parola da nascondere è: </span>
            <strong><?php echo $wordToHide?></strong>
        </div>
       <div id="new-text">
            <?= $newText ?>
            <strong class="text-lenght">La lunghezza del paragrafo è: <?= $textLenght ?></strong>
       </div>
    </div>
</body>
</html>
       


       