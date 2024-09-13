<?php

require 'db.php';

if(isset($_POST['book_button'])) {
    $flight_id = $_POST['flight_id'];

    $sql = "SELECT * FROM flight WHERE flight_id = $flight_id";
    $result = mysqli_query($conn, $sql);

    if($result && mysqli_num_rows($result) > 0) {
        
        $row = mysqli_fetch_assoc($result);

        
        echo "<h3>Flight Ticket</h3><br>";
        echo "<p><strong>Flight ID:</strong> " . $row['flight_id'] . "</p>";
        echo "<p><strong>Departure:</strong> " . $row['depart'] . "</p>";
        echo "<p><strong>Arrival:</strong> " . $row['arrive'] . "</p>";
        echo "<p><strong>Departure Date:</strong> " . $row['ddate'] . "</p>";
        echo "<p><strong>Arrival Date:</strong> " . $row['adate'] . "</p>";
        echo "<p><strong>Price:</strong> " . $row['price'] . "</p><br>";
        echo "<button onclick='window.print()' class='btn btn-outline-primary'>Print Ticket</button>";
    } else {
        echo "Flight details not found.";
    }
} else {
    echo "Flight ID not provided.";
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sky Voyage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>