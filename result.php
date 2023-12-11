<?php
$banned_word = $_GET['banned_word'];
$text = $_GET['text'];

$new_paragraph = str_replace($banned_word, '***', $text);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP badwords</title>
</head>
<body>
    <h1>PHP badwords</h1>
    <h2>Testo completo</h2>
    <p><strong>Il tuo testo:</strong> <?php echo $text ?></p>
    <p><strong>La lungheza del tuo testo:</strong> <?php echo strlen($text) ?></p>

    <h2>Testo censurato</h2>
    <p><strong>Il tuo testo:</strong> <?php echo $new_paragraph ?></p>
    <p><strong>La lungheza del tuo testo:</strong> <?php echo strlen($new_paragraph) ?></p>
</body>
</html>