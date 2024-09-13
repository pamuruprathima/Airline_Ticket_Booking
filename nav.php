<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: login.php");
  exit;
}
?>

<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} 
else {
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg bg-color py-5 pt-lg-4">
        <div class="container">
          <a class="navbar-brand text-white" href="index.php">
          Sky Voyage</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link mx-2" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="offerings.php">Offerings</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="book.php">Flights</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2" href="contact.php">Contact</a>
              </li>
            </ul>';

if (!$loggedin) {
  echo '<div>
            <button class="btn btn-outline-info mx-2" type="submit"><a class="icon-span1" href="login.php">Login</a></button>
            </div>
            <div>
            <button class="btn btn-outline-info mx-2" type="submit"><a class="icon-span1" href="signin.php">Sign-Up</a></button>
            </div>';
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  echo '<div>
      <button class="btn btn-outline-info mx-2" type="submit"><a class="icon-span1" href="logout.php">Logout</a></button>
      </div>';
}
echo '</div>
        </div>
      </nav>';
?>