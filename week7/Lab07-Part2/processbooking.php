<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
    <?php
    print_r($_POST);
        echo "Welcome to Elanor Gamgee I";
        echo "<p>your name:".$_POST["lastname"]." ".$_POST["firstname"]."</p>";
        $booking = $_POST["accom"] ?? [];
        echo "<p>You're now booked on: "
            . ($_POST["bookday"] ?? "")
            . " with "
            . implode(", ", $booking)
            . "</p>";
        echo "<p>Species:" ." ".$_POST["species"]."</p>";
        echo "<p>Age:". $_POST["age"]."</p>";
        echo "<p>Meal Preference:". $_POST["food"]."</p>";
        echo "<p>Number of travellers:". $_POST["partysize"]."</p>"
    ?>
</body>
</html>