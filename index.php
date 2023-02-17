<?php


 $text = $_GET["text-bad"];
 $word = $_GET["bad-word"];
 $new_text = str_replace($word ,"***", $text);



?>




<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>First Php Page</title>
    </head>
    <body>
        

        <form action="index.php" method="GET">

            <h1>Proramma per censurare una parola da un testo</h1>
            Testo Originale : <input type="text" name="text-bad" placeholder="Scrivi un testo..."> <br>
            Parola da censurare : <input type="text" name="bad-word" placeholder="Scrivi un parola..."> <br>
            <input type="submit" value="Invia">

        </form>
        
        <h1>Testo originale:</h1>
        <?php echo $text; ?>
        <p>Lunghezza caratteri => <?php echo strlen($text) ?></p>
        <h1>Testo censurato:</h1>
        <?php echo $new_text; ?>
        <p>Lunghezza caratteri => <?php echo strlen($new_text) ?></p>


    </body>
</html>