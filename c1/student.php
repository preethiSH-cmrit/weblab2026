<!DOCTYPE html>
<html>
        <head>
            <title> Student Sort </title>
            <style>
                table,th,td {
                    border:1px solid black;
                    border-collapse:collapse;
                    padding:5px;
                }
                </style>
</head>
<body>
    <h1> Database Connection </h1>
    Connection Status :
    <?php // connect to database dbstudent_c1
    //servername, username,password,db
    $conn = new mysqli("localhost","root","","dbstudent_c1");
    if($conn->connect_error)
        echo "Connection failed".$conn->connect_error;
    else
        echo "Connection successful";
    // ?>
    <h1> Fetch Student Records </h1>
    <table>
        <tr>
            <th>No.</th><th>Name</th><th>USN</th><th>Dept</th>
        </tr>
        <?php
            //fetch records from db table "tblstudent"
            $sql = "Select * from tblstudent";
            $result = $conn->query($sql);
            //var_dump($result);
            while ($row = $result->fetch_assoc() ){
                $id = $row["ID"]; $name = $row["name"];
                $usn = $row["usn"];$dept=$row["dept"];
                echo "<tr><td>$id</td><td>$name</td>";
                echo "<td>$usn</td><td>$dept</td></tr>";
            }
        ?>
    </table>

    <h1> Selection Sort </h1>
</body>
</html>