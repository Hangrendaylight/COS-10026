<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP variable, arrays and operators</h1>
    <?php
        $days_en=["monday","tuesday","wednesday","thursday","friday","saturday","sunday"];
        echo "<p>the days of the week:</p>";
        foreach($days_en as $day){
            echo "$day ";
        }
        $days_vi=["Thứ hai","thứ ba","Thứ tư","thứ năm","thứ sáu","thứ bảy","chủ nhật"];
        echo "<p>the days of the week:</p>";
        foreach($days_vi as $day){
            echo "$day ";
        }
    ?>
</body>
</html>