<?php
$tdate = date("Y-m-d");
$datetime = new DateTime('tomorrow');
?>

<html>
<head>
	<title> User Login And Registration </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/checkpagestyle.css">

</head>
<body>


	<div class="login-left">
	<div class="col-md-6">
	<form action="" method="post">

	<h2> Check Availability </h2>

	<h2> Booking Details </h2>
	<div class="form-group">
	<label> Room Type </label>
	<select class="form-control" name="rtype">
	<option value='Deluxe Room'>Deluxe Room</option>
	<option value="Premier Room">Premier Room</option>
	<option value="Club Room">Club Room</option>
	<option value="Orchid Suite">Orchid Suite</option>
	</select>


	<div class="form-group">
	<label> Enter Check-in Date </label>
	<input type="date" name="c_in" class="form-control" min="<?php echo $tdate; ?>" required>
	</div>

	<div class="form-group">
	<label> Enter Check-out Date </label>
	<input type="date" name="c_out" class="form-control" min="<?php echo $datetime->format('Y-m-d'); ?>" required>
	</div>	

	<button type="submit" name="submit" class="btn btn-primary"> Check Availability </button>

	</form>
	</div>
	</div>


	<?php
		$link = mysqli_connect('localhost','root','');
		mysqli_select_db($link,'resort_management');

		if(isset($_POST['submit']))
		{
			if(isset($_POST['rtype'], $_POST['c_in'] , $_POST['c_out']))
			{
				$room_type = $_POST['rtype'];
				$cin = $_POST['c_in'];
				$cout = $_POST['c_out'];

				$query = "SELECT COUNT(*) AS total
					FROM
				room
				WHERE
				room_type = '$room_type' AND
				room.room_no not in 
				(
				SELECT
				room_date.room_no
				FROM
				room_date
				WHERE
				(room_date.check_in<='$cin' and room_date.check_out>='$cin')
				OR
				(room_date.check_in<'$cout' and room_date.check_out>='$cout')
				OR
				(room_date.check_in>='$cin' and room_date.check_out<'$cout')
				)";

				$result = mysqli_query($link, $query);
				$value = mysqli_fetch_assoc($result);
				$number = $value['total'];

				echo "<h3>Hurry Up, Only {$number} room left</h3>";
				echo"<a href='admincustomerregistration.php?c_in=$cin&c_out=$cout&typer=$room_type'>Continue Booking</a>";

			}
		}

	?>

</body>

</html>