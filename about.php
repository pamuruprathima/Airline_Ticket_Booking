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

    <section>
        <div class="container">
            <div class="row mt-5">

                <!-- about section image -->
                <div class="col-12 col-md-12 col-lg-6">
                    <figure class="text-center text-lg-start">
                        <img src="./images/anime.jpg" class="about-img img-fluid" alt="">
                    </figure>
                </div>

                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
                    <h1 class="fw-bolder common-heading">Welcome To Sky Voyage</h1>
                    <p class="mt-3 mb-5 para-width">At Sky Voyage Airlines, we believe that every journey should be an unforgettable experience. From the moment you step onto our planes until you arrive at your destination, we strive to provide the highest level of comfort, safety, and service.</p>
                </div>
            </div>
            <hr class="w-75 mx-auto">
            <div class="row mt-5">

                <!-- about section image -->

                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
                    <h1 class="fw-bolder common-heading">Our Vision</h1>
                    <p class="mt-3 mb-5 para-width">Our vision at Sky Voyage Airlines is to redefine the standards of air travel. We aim to be recognized globally as a leading airline, not only for our exceptional service but also for our commitment to innovation, sustainability, and customer satisfaction.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <figure class="text-center text-lg-end">
                        <img src="./images/a1.jpg" class="about-img img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <hr class="w-75 mx-auto">

            <div class="row mt-5">

                <!-- about section image -->
                <div class="col-12 col-md-12 col-lg-6">
                    <figure class="text-center text-lg-start">
                        <img src="./images/a2.jpg" class="about-img img-fluid" alt="">
                    </figure>
                </div>

                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
                    <h1 class="fw-bolder common-heading">Our Story</h1>
                    <p class="mt-3 mb-5 para-width">Established in 2023, Sky Voyage Airlines has quickly emerged as a preferred choice for travelers around the world. Founded by a team of aviation enthusiasts, our airline was born out of a passion for exploration and a dedication to excellence. Since our inception, we have been dedicated to creating seamless travel experiences that exceed our passengers' expectations.</p>
                </div>
            </div>
            <hr class="w-75 mx-auto">

            <div class="row mt-5">

                <!-- about section image -->

                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
                    <h1 class="fw-bolder common-heading">Our Commitment to Safety</h1>
                    <p class="mt-3 mb-5 para-width">Safety is our top priority at Sky Voyage Airlines. We adhere to the highest safety standards and invest in state-of-the-art technology to ensure that every flight is as safe as possible. Our team of highly trained pilots, engineers, and support staff work tirelessly to maintain our impeccable safety record.</p>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <figure class="text-center text-lg-end">
                        <img src="./images/a3.jpg" class="about-img img-fluid" alt="">
                    </figure>
                </div>
            </div>
            <hr class="w-75 mx-auto">
        </div>
    </section>
    <section class="bg-main bg-color hero-section">
        <div class="container">
            <div class="row ">

                <!-- about section image -->
                <div class="col-12 col-md-12 col-lg-6">
                    <figure class="text-center text-lg-start">
                        <img src="./images/map.jpg" class="about-img img-fluid" alt="">
                    </figure>
                </div>

                <div class="col-12 col-md-12 col-lg-6 d-flex flex-column justify-content-center align-item-start">
                    <h1 class="fw-bolder common-heading text-white">Join Us on Your Next Adventure</h1>
                    <p class="mt-3 mb-5 para-width text-light-grey">Whether you're flying for business or leisure, Sky Voyage Airlines is here to make your journey a memorable one. Join us on your next adventure and experience the difference of flying with a world-class airline. Welcome aboard!</p>
                    <div class="text-center text-md-start">
                        <button class="btn btn-primary px-5 py-2"><a class="icon-span1" href="book.php">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="w-75 ma-auto">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


<?php
  require 'footer.php';

?>

</body>

</html>