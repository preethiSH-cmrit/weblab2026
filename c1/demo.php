<!DOCTYPE html>
<html>
    <head>
        <title> PHP demo </title>
</head>
<body>
    <h1> PHP demo </h1>
    <h2>  <?php echo "PHP Variables"; ?> </h2>
    <?php
    $number = 45;
    echo "Number : ".$number;
    if($number > 50){
        echo "<br>Pass";
    }
    else
        echo "<br>Not cleared";

    for($i=0;$i<5;$i++)
        echo "<h3>$i</h3>";

    //arrays
    $arr = ["foo","bar","let"];
    var_dump($arr);
    echo "<br> Size of array:".sizeof($arr);
    //looping through
    foreach($arr as $a)
        echo "<h4>$a</h4>";

    //associative arrays
    $a_arr = ["sname"=>"Ajay","usn"=>"1CR21CS003"];
    var_dump($a_arr);
    echo count($a_arr);
    foreach($a_arr as $name=>$val)
        echo "<h4>$name : $val</h4>";

    ?>

</body>

</html>