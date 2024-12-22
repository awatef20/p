<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x="awatef taher";
    $v="rrryu";
    $z=(str_split($v));/*2*/
    print_r($z);
    echo"<br>";
    echo(strlen("jamiloooooooo"));
    echo"<br>";
    echo(str_word_count("awatef taher a"));
    echo"<br>";
    echo(strrev("rehat fetawa"));
    echo"<br>";
    echo(strpos($x,"awatuuk"));
    echo"<br>";
    echo(str_replace("awatef","ohood",$x));
    echo"<br>";
    echo(str_rot13($x)); /*1*/
    echo"<br>";
    echo(strip_tags("<br> hello <p> jamiloo <b>"));/*3*/
    echo"<br>";
    echo(str_shuffle($x));

    ?>
</body>
</html>