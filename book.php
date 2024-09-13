<?php

require 'nav.php';
?>



<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sky Voyage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="common-section contact-section">

    <div class="container text-center fw-bold common-title ">
      <h2 class="common-heading mt-5">Book Flight Tickets</h2>
      <hr class="w-25 mx-auto">
    </div>

    <div class="container ">
      <div class="form-section  mx-auto">
        <form action="book.php" method="post">
          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="from" class="form-label">From</label>
                <input type="text" name="depart" class="form-control" id="first-name" required>
              </div>
              <div class="col">
                <label for="last-name" class="form-label">To</label>
                <input type="text" name="arrive" class="form-control" id="last-name" required>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="col">
              <label for="dep" class="form-label">Departure</label>
              <input type="date" name="ddate" class="form-control" id="dep" required>
            </div>
          </div>
          <div class="mb-3">
            <div class="col">
              <label for="ret" class="form-label">Return</label>
              <input type="date" name="adate" class="form-control" id="ret">
            </div>
          </div>
          <div class="col visually-hidden">
            <div class="mb-1">Flight</div>
            <select class="form-select mb-3 " name="flight" aria-label="Default select example">
              <option selected>Air India</option>
              <option value="1">Air Asia</option>
              <option value="2">Indigo</option>

            </select>
          </div>
          <div class="mb-5">
            <div class="col">
              <label for="pas" class="form-label">Passengers</label>
              <input type="number" name="ret" class="form-control" id="pas" required>
            </div>
          </div>
          <div class="mb-5">
            <div class="col visually-hidden">
              <label for="pas" class="form-label">Price</label>
              <input type="number" name="price" class="form-control" id="pas">
            </div>
          </div>
          <div class="col">
            <select class="form-select mb-3" aria-label="Default select example">
              <option selected>Economy class</option>
              <option value="1">First class</option>
              <option value="2">Business class</option>

            </select>
          </div>
          <div>
            <button type="submit" name="submit" class="btn btn-primary my-4">Search</button>
          </div>
      </div>

      </form>
    </div>
    </div>
  </section>
  <?php
  include 'db.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $flight = $_POST['flight'];
    $depart = $_POST['depart'];
    $arrive = $_POST['arrive'];
    $ddate = $_POST['ddate'];
    $adate = $_POST['adate'];
    $price = $_POST['price'];

    $sql = "SELECT * FROM flight WHERE depart = '$depart' AND arrive = '$arrive' AND ddate = '$ddate' ORDER BY sno ASC";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-striped table-hover'>
            <tr>
                <th>S.no</th>
                <th>Flight</th>
                <th>Departure</th>
                <th>Arrival</th>
                <th>Departure time</th>
                <th>Arrival time</th>
                <th>Price</th>
                <th>Book now</th>
            </tr>";
        $counter = 1;
        while ($row = mysqli_fetch_assoc($result)) {

          echo "<tr><td>" . $counter++ . "</td><td>" . $row["flight"] . "</td><td>" . $row["depart"] . "</td><td>" . $row["arrive"] . "</td><td>" . $row["ddate"] . "</td><td>" . $row["adate"] . "</td><td>" . $row["price"] . "</td>";
          echo "<td>
        <form action='ticket.php' method='post'>
            <input type='hidden' name='flight_id' value='" . $row['flight_id'] . "'>
            <button type='submit' name='book_button' class='btn btn-outline-primary'>BOOK</button>
        </form>
      </td>";
        }
        echo "</table>";
      } else {
        echo "<p class='text-center fs-3'><strong>No Flights Found.</strong></p><br>";
      }
    } else {
      echo "Error executing the query: " . mysqli_error($conn);
    }
  }
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

<?php
require 'footer.php';

?>