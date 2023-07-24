<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS, Bootstrap, Swiper, JS -->
    <?php require('inc/link.php')?>

        <title>Rockstone Rooms</title>
</head>
<body class="bg-light">

    <!-- header - nav bar -->

    <?php require('inc/header.php'); ?> 

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font mb-5 text-center">Rockstone Rooms</h2>
        <div class="container" style="margin: -10px;">
            <div class="row float-start">
                <div class="col-lg-3 d-flex col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2" style="margin: 10px;">Filter</h4>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse flex-column" id="navbarNav">
                    
                <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3 fs-6">Check Availability</h5>
                                <label class="form-label">Check-in</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Check-out</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3 fs-6">GUEST</h5>
                                <label class="form-label">Adults</label>
                                <input type="number" class="form-control shadow-none">
                                <label class="form-label">Children</label>
                                <input type="number" class="form-control shadow-none">
                                </div>
                            
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3 fs-6">Facilities</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Balcony</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Padio</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Garden</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Mountain view</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Garden View</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Electric kettle</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Private bathroom</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">Bathtub</label>
                                </div>
                            </div>
                </div>
                </div>
                </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-9 col-md-12 mb-4 px-4">
                <!-- card starts -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row  align-items-center">
                            <h2 class="mt-5 pt-4 mb-4 text-center">The Bungalow Room</h2>
<div class="container-fluid px-lg-4 mt-4">

<!-- Full-width images -->
<div class="mySlides">
    <img src="images/bungalow0.jpeg" style="width:100%">
</div>

<div class="mySlides">

    <img src="images/bungalow2.jpeg" style="width:100%">
</div>

<div class="mySlides">
    <img src="images/bungalow3.jpeg" style="width:100%">
</div>

<div class="mySlides">
    <img src="images/bungalow4.jpeg" style="width:100%">
</div>

<div class="mySlides">
    <img src="images/bungalow.jpeg" style="width:100%">
</div>

<div class="mySlides">
    <img src="images/bungalow6.jpeg" style="width:100%">
</div>

<!-- Next and previous buttons -->
<a class="button-next" onclick="plusSlides(-1)">&#10094;</a>
<a class="button-prev" onclick="plusSlides(1)">&#10095;</a>
<!-- script -->

                <script>
                    let slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                    }

                    // Thumbnail image controls
                    function currentSlide(n) {
                    showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("demo");
                    let captionText = document.getElementById("caption");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                    captionText.innerHTML = dots[slideIndex-1].alt;
                }
                </script>

</div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bedroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Patio</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Mountain view</span>
                                </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 children</span>
                            </div>
                            
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$45 night</h6>
                            <a href="book.php" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2">Book Now</a>
                        </div>
                        </div>
                    </div>
                    <!-- second card -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                        <div class="container-fluid px-lg-4 mt-4">
                            <!-- Full-width images -->
                            <div class="mySlides1">
                            <img src="images/familyoutside.jpeg" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="images/familyroom.jpeg" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="images/familyroom0.jpeg" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="images/familyroom3.jpeg" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="images/familyroom1.jpeg" style="width:100%">
                            </div>

                            <div class="mySlides1">
                                <img src="images/familyroom4.jpeg" style="width:100%">
                            </div>
                            <!-- Next and previous buttons -->
                            <a class="button-next" onclick="plusSlides2(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides2(1)">&#10095;</a>
                            </div>
                    <!--  script -->
                            <script>
                            let slideIndex2 = 1;
                            showSlides2(slideIndex2);

                            function plusSlides2(n) {
                            showSlides2(slideIndex2 += n);
                            }

                            function currentSlide2(n) {
                            showSlides2(slideIndex2 = n);
                            }

                            function showSlides2(n) {
                            let i;
                            let slides = document.getElementsByClassName("mySlides1");
                            let dots = document.getElementsByClassName("demo1");
                            if (n > slides.length) { slideIndex2 = 1; }
                            if (n < 1) { slideIndex2 = slides.length; }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex2 - 1].style.display = "block";
                            dots[slideIndex2 - 1].className += " active";
                            }
                            </script>

                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">The Family Room</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Bedrooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Balcony</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Mountain view</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Garden view</span>
                                </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Up to 4 Adults</span>
                            </div>
                            
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$45 night</h6>
                            <a href="book.php" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2">Book Now</a>
                        </div>
                        </div>
                    </div>
                    <!-- third card -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                        <div class="container-fluid px-lg-4 mt-4">
                            <!-- Full-width images -->
                        <div class="mySlides2">
                        <img src="images/circleroom.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/circleroom0.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/circleroom1.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/circleroom2.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/circleroom3.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/circleroom5.png" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/circleroom6.png" style="width:100%">
                        </div>
                        <!-- Next and button-nextious buttons -->
                        <a class="button-next" onclick="plusSlides3(-1)">&#10094;</a>
                        <a class="button-prev" onclick="plusSlides3(1)">&#10095;</a>
                        </div>
                        <!-- script -->
                        <script>
                            let slideIndex3 = 1;
                            showSlides3(slideIndex3);

                            function plusSlides3(n) {
                            showSlides3(slideIndex3 += n);
                            }

                            function currentSlide3(n) {
                            showSlides3(slideIndex3 = n);
                            }

                            function showSlides3(n) {
                            let i;
                            let slides = document.getElementsByClassName("mySlides2");
                            let dots = document.getElementsByClassName("demo2");
                            if (n > slides.length) { slideIndex3 = 1; }
                            if (n < 1) { slideIndex3 = slides.length; }
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                            }
                            slides[slideIndex3 - 1].style.display = "block";
                            dots[slideIndex3 - 1].className += " active";
                            }
                        </script>

                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">The Round House</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bedrooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Balcony</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Mountain view</span>
                                </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Up to 3 Adults</span>
                            </div>
                            
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$65 night</h6>
                            <a href="book.php" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2">Book Now</a>
                        </div>
                        </div>
                    </div>
                    <!-- fourth card -->
                    <div class="card mb-4 border-0 shadow">
                        <div class="row g-0 p-3 align-items-center">
                        <div class="container-fluid px-lg-4 mt-4">
                        <!-- Full-width images -->
                        <div class="mySlides3">
                        <img src="images/villa.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villa00.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villa7.png" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villaroom.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villaroom1.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villaroom2.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villaroom3.jpeg" style="width:100%">
                        </div>

                        <div class="mySlides3">
                            <img src="images/villaroom4.jpeg" style="width:100%">
                        </div>
                        <!-- Next and pretious buttons -->
                        <a class="button-next" onclick="plusSlides4(-1)">&#10094;</a>
                        <a class="button-prev" onclick="plusSlides4(1)">&#10095;</a>
                        </div>
<script>
  let slideIndex4 = 1;
  showSlides4(slideIndex4);

  function plusSlides4(n) {
    showSlides4(slideIndex4 += n);
  }

  function currentSlide4(n) {
    showSlides4(slideIndex4 = n);
  }

  function showSlides4(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides3");
    let dots = document.getElementsByClassName("demo2");
    if (n > slides.length) { slideIndex4 = 1; }
    if (n < 1) { slideIndex4 = slides.length; }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex4 - 1].style.display = "block";
    dots[slideIndex4 - 1].className += " active";
  }
</script>


                            <div class="col-md-5 px-lg-3 px-md-3 px-0">
                                <h5 class="mb-3">The Mountain Villa</h5>
                                <div class="features mb-3">
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 bedrooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Bathtub</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Patio</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Electric Kettle</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Mountain view</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">Garden view</span>
                                </div>
                            <div class="guests">
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Up to 6 Adults</span>
                            </div>
                            
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">$100 night</h6>
                            <a href="book.php" class="btn btn-sm w-100 text-white custome-bg shadow-none mb-2">Book Now</a>
                        </div>
                        </div>
                    </div>
                    <!-- card ends -->
                </div>
            </div>
        </div>    
    </div>
    <!-- footer -->

    <?php require('inc/footer.php'); ?> 


</body>
</html>