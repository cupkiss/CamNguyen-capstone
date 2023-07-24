<?php 
session_start();

// connect to database
require('inc/config.php');

// variable declaration
$checkin = $checkout = $first_name = $last_name = $email  = $phone =  $children = $adult = $room_pref= '';

// Variable declaration
$errors = array(
    'checkin' => '',
    'checkout' => '',
    'first_name' => '',
    'last_name' => '',
    'email' => '',
    'phone' => '',
    'adult' => '',
    'children' => '',
    'room_pref' => ''
);


if (isset($_POST['reserve_btn'])) {
    // Validate check-in and check-out dates
    if (empty($_POST['checkin']) || empty($_POST['checkout'])) {
        $errors['checkin'] = 'Check-in and Check-out dates are required<br>';
    } else {
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];

        // Validate date format (assuming the format is 'Y-m-d')
        if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkin) || !preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkout)) {
            $errors['checkin'] = 'Invalid date format. Please use YYYY-MM-DD format.<br>';
        }
    }
    // validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $responses[] = 'Email is not valid!';
    }
    // First name must contain only alphabet characters.
    if (!preg_match('/^[a-zA-Z]+$/', $first_name)) {
        $responses[] = 'First name must contain only characters!';
    }
    // Last name must contain only alphabet characters.
    if (!preg_match('/^[a-zA-Z]+$/', $last_name)) {
        $responses[] = 'Last name must contain only characters!';
    }
    // validate option format
    if ( empty($_POST['children'])) {
        $errors['children'] = 'Amount of children is required<br>';
    } else {

        $children = $_POST['children'];
    }
    if ( empty($_POST['adult'])) {
        $errors['adult'] = 'Amount of guests is required<br>';
    } else {

        $adult = $_POST['adult'];
    }
    if (array_filter($errors)) {
        // echo 'errors in the form';
    } else {
        // Your database connection and escape code...
    $checkin = mysqli_real_escape_string($conn, $_POST['checkin']);
    $checkout = mysqli_real_escape_string($conn, $_POST['checkout']);
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $adult = mysqli_real_escape_string($conn, $_POST['adult']);
    $children = mysqli_real_escape_string($conn, $_POST['children']);
    $room_pref = mysqli_real_escape_string($conn, $_POST['room_pref']);
        // Create the SQL query
        $sql = "INSERT INTO reservation (checkin, checkout, first_name, last_name, email, phone, adult, children, room_pref)
        VALUES ('$checkin', '$checkout', '$first_name', '$last_name', '$email', '$phone', '$adult','$children', '$room_pref')";


        if (mysqli_query($conn, $sql)) {
            // success
            header('Location: book.php');
            exit(); // Ensure the script stops executing after the redirect
        } else {
            // error
            echo 'Query error: ' . mysqli_error($conn);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS, Bootstrap, Swiper, JS -->
    <?php require('inc/link.php')?>
    <?php require('inc/header.php'); ?> 

        <title>Rockstone Homestay</title>
</head>
<body class="bg-light">
        <form class="hotel-reservation-form" method="post" action="">
            <h1 class="fw-bold h-font mb-5 text-center">Rockstone Reservation Form</h1>
                <!-- Input Elements -->
                <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Free cancel reservation 7 days before check-in date</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-4 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-in</label>
                            <input id="checkin" type="date" name="checkin" required class="form-control shadow-none">
                        </div>
                        <div class="col-lg-4 mb-3">
                            <label class="form-label" style="font-weight: 500;">Check-out</label>
                            <input id="checkout" type="date" name="checkout" required class="form-control shadow-none">
                        </div>
                        <div>
            <div class="col-lg-8 mb-3">
            <label class="form-label" style="font-weight: 500;">First name</label>
            <input id="first_name" type="text" name="first_name" placeholder="first Name" required class="form-control shadow-none">
        </div>
        <div class="col-lg-8 mb-3">
            <label class="form-label" style="font-weight: 500;">Last name</label>
            <input id="last_name" type="text" name="last_name" placeholder="last Name" required class="form-control shadow-none">
        </div>

        <div class="col-lg-8 mb-3">
            <label class="form-label" style="font-weight: 500;">Email</label>
            <input id="email" type="email" name="email" placeholder="Your valid email" required class="form-control shadow-none">
        </div>
        <div class="col-lg-8 mb-3">
            <label class="form-label" style="font-weight: 500;">Phone</label>
        <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required class="form-control shadow-none">
        </div>

        <div class="col-lg-6 mb-3">
                            <label class="form-label" style="font-weight: 500;">adults</label>
                            <select class="form-select shadow-none" id="adult" name="adult" required>
                                <option disabled selected value="">Select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" style="font-weight: 500;">Children</label>
                            <select class="form-select shadow-none" id="children" name="children" required>
                                <option disabled selected value="">Select</option>
                                <option value="0">None</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
            <label style="font-weight: 500;">Room Preference</label>
            <select id="room_pref" name="room_pref" required class="form-select shadow-none">
                <option disabled selected value="">--</option>
                <option value="roundhouse">Round House</option>
                <option value="bungalow">Bungalow room</option>
                <option value="family">Family room</option>
                <option value="villa">Mountain villa</option>
            </select>
            </div>
                        <div class="col-lg-1 mb-lg-3  mt-4">
                            <button type="submit" class="btn text-white shadow-none custome-bg" name="reserve_btn" value="Reserve"><a href="reservation.php" style="color:white;">Reserve</a></button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    </body>
<!-- script date -->

<script>checkin.min = new Date().toISOString().split("T")[0];
        checkout.min = new Date().toISOString().split("T")[0];
</script>

        <!-- footer -->

        <?php require('inc/footer.php'); ?> 
</html>
