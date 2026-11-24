<!DOCTYPE html>
<html>
    <head>
        <title>Visitor count</title>
</head>
<body>
    <h1> Visitor count </h1>

    <hr>
    <em>Total number of visitors :</em>
    <?php $visitorcount;
    $file = "vcount.txt";
    $visitorcount = file_get_contents($file);
    $visitorcount++;
    file_put_contents($file,$visitorcount);
    //script to update count
    // ?>
    <strong> <?php echo $visitorcount; ?>
</body>

</html>