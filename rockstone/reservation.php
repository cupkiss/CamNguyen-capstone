<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS, Bootstrap, Swiper, JS -->
    <?php 
		require('inc/link.php');
		require('inc/header.php');
	?> 

    <title>Rockstone Homestay</title>
</head>
<body class="bg-light row justify-content-between align-items-center">
	<form class="hotel-reservation-form" method="post" action="">
		<h3 class="fw-bold h-font mb-5 text-center">Rockstone Reservation Confirm</h3>
		<div class="container bg-white">
			<h4 class="fw-bold text-center">Guest Details</h4>
			<div class="text-center mt-4 my-5">
				<?php
				require_once('inc/config.php');

				$sql = "SELECT checkin, checkout, first_name, last_name, email, phone, adult, children, room_pref FROM reservation";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "Dear Mr./Mrs./Ms." . $row["last_name"], " " . " has booked a reservation for check-in at 2 p.m on <strong>". $row["checkin"]. "</strong> and will check-out at 12 p.m on <strong>". $row["checkout"]. "</strong>.";
						echo "<br><br> Customer's full name: ". $row["first_name"]. " " . $row["last_name"] . "<br>";
						echo "<br><br> Guests: ". $row["adult"].  "  adult " . $row["children"] ."  children<br>";
						echo "<br><br> Email: ". $row["email"]. "<br>";
						echo "<br><br> Phone numbers: ". $row["phone"]. "<br>";
						echo "<br><br> Room reference: ". $row["room_pref"]. "<br><br><br>";
					}
				} else {
					echo "Customer not found";
				}

				$conn->close();
				?> 
			</div>
		</div>
	</form>
	<div style="text-align:center;">
		<h1>Thank you!</h1>
		<p>Your reservation has been received.</p>
		<p>This page will redirect in <span id="timer"></span>s.</p>
	</div>
	<script type="text/javascript">
		var count = 30; 
		var redirect = "about.php";
	
		function countDown() {
			if(count >= 0){
				document.getElementById("timer").innerHTML = count--;
				setTimeout("countDown()", 1000);
			}else{
				window.location.href = redirect;
			}
		}
		countDown();
	</script>

	<!-- footer -->
	<?php require('inc/footer.php'); ?>
</body>
</html>
