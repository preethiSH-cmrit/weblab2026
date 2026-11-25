<html>
<head><title>PHP</title>
</head>
<body>
    <h1> Visitor count</h1>
    <hr>
    <em> No. of visitors : </em>
    <?php
    $file = "count.txt";
    $counter = file_get_contents($file);
    $counter++;
    file_put_contents($file,$counter);
    echo $counter;

    ?>
</html>