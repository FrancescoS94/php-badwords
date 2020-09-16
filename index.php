<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
$text = "È la tua ultima occasione, se rinunci non ne avrai altre. Pillola azzurra, fine della storia: domani ti sveglierai in camera tua, e crederai a quello che vorrai. Pillola rossa, resti nel paese delle meraviglie, e vedrai quant'è profonda la tana del bianconiglio. Ti sto offrendo solo la verità, ricordalo. Niente di più.";
$textLeng = strlen($text);

$name = $_GET["badword"];
$textReplace = str_replace($name, "***", $text);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p><?php echo $text; ?></p>
        <p>La lunghezza è: <?php echo $textLeng; ?></p>
        <p><?php echo $textReplace; ?></p>
    </body>
</html>
