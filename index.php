<!-- navbar -->

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  
  <!-- hero section -->

  <section class="bg-main bg-color hero-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
          <h1 class="fw-bolder text-white">Explore The World With Us</h1>
          <p class="mt-3 mb-5 para-width text-light-grey">Experience the epitome of luxury travel with Sky Voyage, where every detail is meticulously crafted to
          exceed your expectations. Redefine the way you fly with India's premier elite airline service.</p>
          <div class="text-center text-md-start">
            <button class="btn btn-primary px-5 py-2"><a class="icon-span1" href="contact.php">Explore Now</a></button>
          </div>
        </div>

        <!-- her section image -->
        <div class="col-12 col-md-12 col-lg-6">
          <div class="text-center text-lg-end">
            <img src="./images/f3.jpg" class="hero-img" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="custom-shape-divider-bottom-1713341674">
      <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
      </svg>
  </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

<!-- offerings section -->

<section class="offerings-section">
  <div class="container text-center common-title fw-bold">
    <h2 class="common-heading">Our Premium Offerings</h2>
    <hr class="w-25 mx-auto">
  </div>
  <div class="container mt-5">
    <div class="row g-5 ">
        <div class="col-xxl-4 col-lg-4 col-12 ">
            <div class=" card-box rounded-2 p-5 ">
                <img alt="Image" class="img-fluid" src="./images/exc.jpg" width="300px">

                <h5 class="my-3 fw-normal text-center"> Exclusive Perks</h5>
                <p class="pe-3 mb-5">
                  Indulge in personalized in-flight services with our attentive crew and top-tier amenities for a truly luxurious journey.
                </p>
                <div class="  d-flex justify-content-center align-items-center ">
                    <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"
                       href="offerings.php">
                       <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-lg-4 col-12  ">
            <div class=" card-box rounded-2 p-5 shadow">
                <img alt="GIF Image" class="img-fluid" src="./images/bespoke.jpg" width="300px">

                <h5 class="my-3 fw-normal text-center"> Bespoke Travel Services </h5>
                <p class="pe-3 mb-5">
                  Savor gourmet meals and exclusive entertainment options onboard our cutting-edge aircraft, ensuring a delightful travel experience.
                </p>
                <div class="  d-flex justify-content-center align-items-center ">
                    <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"
                       href="offerings.php">
                        <i class="fa-solid fa-arrow-right"> </i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-xxl-4 col-lg-4 col-12 ">
            <div class=" card-box rounded-2 p-5 ">
                <img alt="GIF Image" class="img-fluid " src="./images/pro.jpg" width="300px">
                <h5 class="my-3 fw-normal text-center"> Professional Crew</h5>
                <p class="pe-3 mb-5">
                  Explore bespoke travel opportunities curated to your preferences, making each journey with us a unique and unforgettable experience.
                </p>
                <div class="  d-flex justify-content-center align-items-center ">
                    <a class="icon-span d-flex justify-content-center align-items-center rounded-circle mb-3"
                       href="offerings.php">
                        <i class="fa-solid fa-arrow-right"> </i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<hr class="w-25 mx-auto">

<!-- book now section -->

<section class="book-section">
  <div class="container common-title fw-bold">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-6 my-3">
        <h3 class="fw-bold">Start your Sky Voyage</h3>
      </div>
      <div class="col-12 col-md-12 col-lg-6">
        <div class="text-center text-lg-end">
          <button class="btn btn-primary px-5 py-2"><a class="icon-span1" href="book.php">Book Now</a></button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About section  -->

<section class="bg-color more-info-section">
  <div class="container">
    <div class="row">
      
      <!-- about section image -->
      <div class="col-12 col-md-12 col-lg-6">
        <figure class="mt-5">
          <img src="./images/anime.jpg" class="about-img img-fluid" alt="">
        </figure>
      </div>

      <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
        <h1 class="fw-bolder text-white common-heading">Our Story of Excellence</h1>
        <p class="mt-3 mb-5 para-width text-light-grey">Sky Voyage is a premier airline service redefining luxury air travel with top-tier amenities and flawless service, catering to discerning passengers seeking unparalleled experiences in the skies.</p>
        <div class="text-center text-md-start">
          <button class="btn btn-primary px-5 py-2"><a class="icon-span1" href="about.php">Read More</a></button>
        </div>
      </div> 
    </div>
  </div>
</section>

<!-- why choose -->

<section class="common-section business-section" id="online_services">
  <div class="container text-center fw-bold common-title">
      <h2 class="common-heading mt-5">Why Choose Sky Voyage</h2>
      <hr class="w-25 mx-auto ">
  </div>

  <div class="container">
      <div class="row g-5">
          <div class="col-xl-6 col-md-12 ">
              <div class="d-flex  px-3 py-5 shadow ">             
                  <div class="row ">
                      <p class="mb-3 fw-bolder">Exquisite Luxury</p>
                      <p> Enjoy personalized services, fine dining, and exclusive amenities that redefine luxury air travel for the discerning passenger </p>
                  </div>
              </div>
          </div>
          

          <div class="col-xl-6 col-md-12 ">
              <div class="d-flex  px-3 py-5 shadow ">
                  <div class="row ">
                      <p class="mb-3 fw-bolder">Tailored Experiences </p>
                      <p>From personalized itineraries to bespoke services, we cater to your every preference, ensuring a seamless and unforgettable journey. </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<!-- customer testimonals -->

<section class="offerings-section">
  <div class="container text-center common-title fw-bold">
    <h2 class="common-heading">Passenger Testimonials</h2>
    <hr class="w-25 mx-auto">
  </div>
  <div class="container mt-5">
    <div class="row g-5 ">
        <div class="col-xxl-4 col-lg-4 col-12 ">
            <div class=" card-box rounded-2 p-5 ">
                <img alt="Image" class="img-fluid" src="./images/fe2.jpg" width="300px">

                <h5 class="my-3 fw-normal text-center">Riya S.</h5>
                <p class="pe-3 mb-5">
                My recent journey with Sky Voyage was an absolute delight! I highly recommend Sky Voyage to anyone seeking a truly premium travel experience. 
                </p>
                <div class=" mt-3 d-flex justify-content-center">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="far fa-star"></i>
              </div>
            </div>
        </div>

        <div class="col-xxl-4 col-lg-4 col-12  ">
            <div class=" card-box rounded-2 p-5 shadow">
                <img alt="GIF Image" class="img-fluid" src="./images/fe1.jpg" width="300px">

                <h5 class="my-3 fw-normal text-center">Lalitha D. </h5>
                <p class="pe-3 mb-5">
                Flying with Sky Voyage was an unforgettable experience. The attention to detail and the level of service surpassed my expectations. Highly recommended!
                </p>
                <div class=" mt-3 d-flex justify-content-center">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="far fa-star"></i>
              </div>
            </div>
        </div>

        <div class="col-xxl-4 col-lg-4 col-12 ">
            <div class=" card-box rounded-2 p-5 ">
                <img alt="GIF Image" class="img-fluid" src="./images/m1.jpg" width="300px">
                <h5 class="my-3 fw-normal text-center"> Rajesh P.</h5>
                <p class="pe-3 mb-5">
                  As a frequent flyer, I have experienced my fair share of airlines, but Sky Voyage truly stands out. I wouldn't hesitate to choose Sky Voyage for my future travels.
                </p>
                <div class=" mt-3 d-flex justify-content-center">
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="fa-solid fa-star"></i>
                  <i class="far fa-star"></i>
              </div>
            </div>
        </div>
    </div>
</div>
</section>

<!-- footer section -->

<?php
  require 'footer.php';

?>


</body>

</html>