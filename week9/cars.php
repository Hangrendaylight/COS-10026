<?php
    require_once "setting.php";
    $dbconn=@mysqli_connect($host, $user, $pwd, $sql_db);
    if($dbconn){
        $query="SELECT * FROM cars";
        $result = mysqli_query($dbconn,$query);
        if($result){
            echo "<table border='1' cellpadding='5'>";


            echo "<thead>";
            echo "<tr>";
            echo "<th>Car ID</th>";
            echo "<th>Make</th>";
            echo "<th>Model</th>";
            echo "<th>Price</th>";
            echo "<th>Year of Manufacture</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $row['car_id'] . "</td>";
                echo "<td>" . $row['make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['yom'] . "</td>";
                echo "</tr>";
                echo "</td>";
            }
            echo "</tbody>";
            }
        else{
            echo "<p>There are no cars to display.</P>";}
        mysqli_close($dbconn);
    }else{
        echo "<p>Unable to connect to database</p>";
        }
?>