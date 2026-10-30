<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP variables, arrays and operators</h1>
    <?php
        $marks=array(85,85,95);
        $marks[1]=90;
        $ave=($marks[0]+$marks[1]+$marks[2])/3;
        if ($ave>=50)
            $status="passed";
        else
            $status="failed";
        echo "<p>The average score is $ave, you $status.</p>"
    ?>
</body>
</html>