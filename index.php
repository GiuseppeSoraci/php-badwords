<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>

    <?php
    $badword = $_GET['badword'];
    $truman = "in case I don't see you... good afternoon, good evening, and good night";
    $length = strlen($truman);
    $replaced = str_replace($badword, '***', $truman);
    ?>

    <header>
        <h1><?php echo ucfirst($replaced); ?></h1>
        <p>The length of the sentence is <?php echo $length ?></p>
    </header>


</body>

</html>