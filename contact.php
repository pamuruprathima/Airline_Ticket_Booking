<?php

require 'nav.php';
?>

<?php
    include 'db.php';

  if($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];

  $sql = "INSERT INTO `contact` (`fname`, `lname`, `email`, `msg`, `date`) VALUES ('$fname', '$lname', '$email', '$msg', current_timestamp())";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your entry has been submitted successfully!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
  }
  else{
    echo "The record was not inserted successfully because of this error ---->" . mysqli_error($conn);
  }
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
    <link rel="stylesheet" href="style.css">
</head>

<body>
<section class="common-section contact-section">

    <div class="container text-center fw-bold common-title ">
        <h2 class="common-heading mt-5">Contact Us</h2>
        <hr class="w-25 mx-auto">
    </div>

    <div class="container ">
        <div class="form-section  mx-auto">
            <form action="contact.php" method="post">
                <div class="mb-3">
                    <div class="row">
                        <div class="col">
                            <label for="first-name" class="form-label">First name</label>
                            <input type="text" name="fname" class="form-control" id="first-name"
                                   required>
                        </div>
                        <div class="col">
                            <label for="last-name" class="form-label">Last name</label>
                            <input type="text" name="lname" class="form-control" id="last-name" >
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" required  aria-describedby="emailHelp">
                    <small>We'll never share your email with anyone else</small>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Your Concern</label>
                    <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" required  rows="3"></textarea>
                </div>

                <button type="submit" name="submit" class="btn btn-primary mb-4">Submit</button>
            </form>
        </div>
    </div>
</section>
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>


<?php
  require 'footer.php';

?>
