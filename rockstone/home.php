<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS, Bootstrap, Swiper, JS -->
    <?php require('inc/link.php')?>

        <title>Rockstone Homestay</title>
</head>
<body class="bg-light">

    <!-- header  -->

<!-- nav bar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Rockstone Homestay</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link me-3 active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-3" href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-3" href="room.php">Rooms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-3" href="book.php">Book Now</a>
            </li>
            </ul>

            <div class="d-flex" role="search">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2"><a href="index.php">Logout</a></button>
        </div>
        </div>
        </nav>
            </div>
            </div>
            </form>
        </div>
        </div>
<!-- 
Nav bar -->


    <!-- Ads pictures -->
        <div class="container-fluid px-lg-4 mt-4">
            <div class="swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="images/home1.png" class="w-100 d-block"></div>
                    <div class="swiper-slide"><img src="images/home2.png" class="w-100 d-block"></div>
                    <div class="swiper-slide"><img src="images/home3.png" class="w-100 d-block"></div>
                    <div class="swiper-slide"><img src="images/home4.png" class="w-100 d-block"></div>
                    <div class="swiper-slide"><img src="images/home5.png" class="w-100 d-block"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <!-- script for slide container -->
        <script src="script.js"></script>

        <!-- check availability form -->

    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Check The Available Booking</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input type="date" id="checkin" name="checkin"  class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input type="date" id="checkout" name="checkout" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Adult</label>
                            <select class="form-select shadow-none">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none">
                                <option selected>Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3  mt-2">
                            <button type="submit" class="btn text-white shadow-none custome-bg">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
        <!-- Room Options -->

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Rockstone Rooms</h2>

<div class="container">
    <div class="row">
        <!-- First optional room -->
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/circleroom3.jpeg" class="card-img-top" alt="Special Room">
                <div class="card-body">
                    <h5 class="card-title">The Round House</h5>
                    <h6 class="mb-4">$65 per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 room (30m2)
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 bedroom
                        </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 bathroom
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.php" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
                    <a href="facility.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Second Optional Room -->
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/bungalow0.jpeg" class="card-img-top" alt="Special Room">
                <div class="card-body">
                    <h5 class="card-title">The Bungalow Room</h5>
                    <h6 class="mb-4">$45 per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 room (20m2)
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 bedroom
                        </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 bathroom
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.php" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
                    <a href="facility.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Third optional room -->
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/familyoutside.jpeg" class="card-img-top" alt="Special Room">
                <div class="card-body">
                    <h5 class="card-title">The Family Room</h5>
                    <h6 class="mb-4">$45 per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 beds
                        </span>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 private bathroom
                        </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                            Up to 4 people
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.php" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
                    <a href="facility.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- fourth optional room -->
        <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
            <img src="images/villa00.jpeg" class="card-img-top" alt="Special Room">
                <div class="card-body">
                    <h5 class="card-title">The Mountain Villa</h5>
                    <h6 class="mb-4">$100 per night</h6>
                    <div class="feature mb-4">
                        <h6 class="mb-1">Features</h6>
                        <span class="badge rounded-pill bg-light text-dark text-wrap">
                            2 bedrooms
                        </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                            1 bathroom
                        </span>
                        </span><span class="badge rounded-pill bg-light text-dark text-wrap">
                            Up to 6 people
                        </span>
                    </div>
                    <div class="rating mb-4">
                        <h6 class="mb-1">Rating</h6>
                        <span class="badge rounded-pill bg-light">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                        </span>
                    </div>
                    <div class="d-flex justify-content-evenly mb-2">
                    <a href="book.php" class="btn btn-sm text-white custome-bg shadow-none">Book Now</a>
                    <a href="facility.php" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
            <a href="room.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Discover More Rooms</a>
        </div>
        <!-- Rules -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Rockstone Rules</h2>
            <div class="container">
                <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/checkin.png" width="80px"></img>
                    <h5 class="mt-3">Check-in at 2 p.m.</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/checkout.png" width="80px"></img>
                    <h5 class="mt-3">Check-out at 12 p.m.</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/peticon.png" width="80px"></img>
                    <h5 class="mt-3">Pets are allowed</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/cancelicon.png" width="80px"></img>
                    <h5 class="mt-3">Cancel 7 days before</h5>
                    </div>
                    <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                    <img src="images/id.png" width="80px"></img>
                    <h5 class="mt-3">ID is required</h5>
                    </div>
                </div>
            </div>

        <div class="col-lg-12 text-center mt-5">
            <a href="facility.php" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Discover More About Us</a>
        </div>
    </div>
</div>

<!-- Location in Map -->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Location</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29528.038510686285!2d103.89723305000003!3d22.315657699999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x36cd40b5f10a6ee3%3A0xc20fe0befadae3c2!2zSOG6p3UgVGjDoG8sIEzDoG8gQ2FpLCBMYW8gQ2FpLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1685549206622!5m2!1sen!2s" height="450" style="border:0;" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="bg-white p-4 rounded mb-4"></div>
                    <h5 class="mt-4 pt-4 mb-4 text-center fw-bold">Top attractions</h5>
                        <p class="d-inline-block mb-4 text-decoration-none">Sa Pa Bus Station - 4.9 km</p>
                        <p class="d-inline-block mb-4 text-decoration-none">Sa Pa Post Office - 5 km</p>
                        <p class="d-inline-block mb-4 text-decoration-none">Sa Pa Stone Church - 5 km</p>
                        <p class="d-inline-block mb-4 text-decoration-none">Sa Pa Central Square - 5.1 km</p>
                        <p class="d-inline-block mb-4 text-decoration-none">Fansipan Legend Cable Car Station - 6.9 km</p>
                    </div>
            </div>
        </div>
<!-- script date -->

<script>checkin.min = new Date().toISOString().split("T")[0];
        checkout.min = new Date().toISOString().split("T")[0];
</script>

<!-- footer -->

<?php require('inc/footer.php'); ?> 


</body>
</html>