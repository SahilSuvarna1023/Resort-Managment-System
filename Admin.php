<?php

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'resort_management');

    $sql1 = 'SELECT * FROM customer WHERE status != "Checked Out" ORDER BY id DESC';
    $sql2 = 'SELECT * FROM employee';
    $sql8 = 'SELECT employee.id, employee.fullname, employee.address, employee.phone, employee.startdate, employee.salary, admin.id, admin.username FROM employee INNER JOIN admin WHERE employee.id = admin.id';

    $record1 = mysqli_query($con, $sql1);
    $record2 = mysqli_query($con, $sql2);
    $record8 = mysqli_query($con, $sql8);

    $sql3 = 'SELECT room.room_no, room_date.cus_id, room_date.check_in, room_date.check_out FROM room INNER JOIN room_date ON room.room_no = room_date.room_no AND room_type="Deluxe Room"';
    $sql4 = 'SELECT room.room_no, room_date.cus_id, room_date.check_in, room_date.check_out FROM room INNER JOIN room_date ON room.room_no = room_date.room_no AND room_type="Premier Room"';
    $sql5 = 'SELECT room.room_no, room_date.cus_id, room_date.check_in, room_date.check_out FROM room INNER JOIN room_date ON room.room_no = room_date.room_no AND room_type="Club Room"';
    $sql6 = 'SELECT room.room_no, room_date.cus_id, room_date.check_in, room_date.check_out FROM room INNER JOIN room_date ON room.room_no = room_date.room_no AND room_type="Orchid Suite"';
    $sql7 = 'SELECT * FROM customer ORDER BY check_out DESC';

    $record3 = mysqli_query($con, $sql3);
    $record4 = mysqli_query($con, $sql4);
    $record5 = mysqli_query($con, $sql5);
    $record6 = mysqli_query($con, $sql6);
    $record7 = mysqli_query($con, $sql7);

    $Dcount  = 'SELECT room.room_no, room_date.cus_id, room_date.check_in, room_date.check_out FROM room INNER JOIN room_date ON room.room_no = room_date.room_no AND room_type="Deluxe Room" AND check_in="00000000"';
    $Drecord = mysqli_query($con, $Dcount);
    $Dvalue  = mysqli_fetch_assoc($Drecord);
    //$number  = $Dvalue['total'];
?>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/admincss.css">
    <title>Admin</title>
</head>

<body>  
<a href="index.php" class="ghost-button">Logout</a> 

    <div class="world">
    <div class="tab">
        <button class="tablink" onclick="admin(event, 'Status')">Status</button>
        <button class="tablink" onclick="admin(event, 'Employee_Info')">Employees Information</button>
        <button class="tablink" onclick="admin(event, 'Room_Booking')">Room Booking</button>
        <button class="tablink" onclick="admin(event, 'Customer')">Customers</button>
		<button class="tablink" onclick="admin(event, 'admininfo')">Admin Info</button>
    </div>

    <div id="Status" class="tabcontent">
		<h1> STATUS </h1>
		<h3> New Booking </h3>
		<a  href="newcustomer.php" class="btn-text"> Add Customer </a>


		<table class="fl-table" width="100%" border="1" cellspacing="1">
            <thead>
		<tr>
			<th>ID</th>
			<th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Nationality</th>
            <th>Phone</th>
            <th>Room Type</th>
            <th>Adult</th>
			<th>Children</th>
            <th>Check-in</th>
            <th>Check-out</th>
			<th>Arrival Time</th>
			<th> Operation </th>       
        </tr>

<?php

        while($customer = mysqli_fetch_assoc($record1))
		{

	echo"<tr>
			<td>".$customer['id']."</td>
			<td>".$customer['title']."</td>
			<td>".$customer['first_name']."</td>
			<td>".$customer["last_name"]."</td>
			<td>".$customer["email"]."</td>
			<td>".$customer["nationality"]."</td>
			<td>".$customer["phone"]."</td>
			<td>".$customer["room_type"]."</td>
			<td>".$customer["adult"]."</td>
			<td>".$customer["children"]."</td>
			<td>".$customer["check_in"]."</td>
			<td>".$customer["check_out"]."</td>
			<td>".$customer["arrival_time"]."</td>
			<td>".$customer["status"]."</td>
			<td><a target='_blank' href='update.php?id=$customer[id]&tit=$customer[title]&fn=$customer[first_name]&ln=$customer[last_name]&em=$customer[email]&na=$customer[nationality]&ph=$customer[phone]&rt=$customer[room_type]&ad=$customer[adult]&ch=$customer[children]&cin=$customer[check_in]&cout=$customer[check_out]&atime=$customer[arrival_time]&rnum=$customer[room_no]'> Action </a> </td>
		</tr>";
		}
	   
	   
?>
            </thead>

	</table>

    </div>

    <div id="Employee_Info" class="tabcontent">
		<a target="_blank" href="addemployee.php" class="btn-text">Add Employee</a>
	    <div class="tabPanel">
        <table class="content-table">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Start Date</th>
                    <th>Salary</th>
                    <th>Employment Type</th>
					<th>Resign Date</th>
					<th>Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($employee = mysqli_fetch_assoc($record2))
                {
                echo"
                <tr>
                    <td>".$employee["id"]."</td>
                    <td>".$employee["fullname"]."</td>
                    <td>".$employee["address"]."</td>
                    <td>".$employee["phone"]."</td>
                    <td>".$employee["startdate"]."</td>
                    <td>".$employee["salary"]."</td>
                    <td>".$employee["emptype"]."</td>
					<td>".$employee["resigndate"]."</td>
					<td colspan='2'><a target='_blank' href='modifyemployee.php?id=$employee[id]&fn=$employee[fullname]&ad=$employee[address]&ph=$employee[phone]&sdate=$employee[startdate]&sal=$employee[salary]&empt=$employee[emptype]&rdate=$employee[resigndate]'> Modify </a>
									<a href='deleteemployee.php?eid=$employee[id]'> Delete </a></td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>

   <div id="Room_Booking" class="tabcontent">
		<a target='_blank' href="addroom.php" class="btn-text">Add Room</a>

	    <div class="tabContainer">
        <div class="buttonContainer">
            <button onclick="showPanel(0,'#f44336')">Delux Room</button>
            <button onclick="showPanel(1,'#4caf50')">Premier Room</button>
            <button onclick="showPanel(2,'#2196f3')">Club Room</button>
            <button onclick="showPanel(3,'#ff5722')">Orchid Suite</button>
        </div>

        <div class="tabPanel">

		<table class="content-table pos">
        <thead>
            <tr>
                <th>Room Id</th>
                <th>Check In</th>
				<th>Check Out</th>
            </tr>
        </thead>
        <tbody>
		<?php
		while($room = mysqli_fetch_assoc($record3))
		{
			echo"<tr>
					<td>".$room['room_no']."</td>
					
					<td>".$room['check_in']."</td>
					<td>".$room['check_out']."</td>
				</tr>";
		}
		?>
        </tbody>
		</table>
		</div>

        <div class="tabPanel">
		<table class="content-table pos">
        <thead>
            <tr>
                <th>Room Id</th>
                <th>Check In</th>
				<th>Check Out</th>
            </tr>
        </thead>
        <tbody>
		<?php
		while($room = mysqli_fetch_assoc($record4))
		{
			echo"<tr>
					<td>".$room['room_no']."</td>
					<td>".$room['check_in']."</td>
					<td>".$room['check_out']."</td>
				</tr>";
		}
		?>
        </tbody>
		</table>
		</div>

        <div class="tabPanel">
		<table class="content-table pos">
        <thead>
            <tr>
                <th>Room Id</th>
                <th>Check In</th>
				<th>Check Out</th>
            </tr>
        </thead>
        <tbody>
		<?php
		while($room = mysqli_fetch_assoc($record5))
		{
			echo"<tr>
					<td>".$room['room_no']."</td>
					<td>".$room['check_in']."</td>
					<td>".$room['check_out']."</td>
				</tr>";
		}
		?>
        </tbody>
		</table>
		</div>
        <div class="tabPanel">
		<table class="content-table pos">
        <thead>
            <tr>
                <th>Room Id</th>
                <th>Check In</th>
				<th>Check Out</th>
            </tr>
        </thead>
        <tbody>
		<?php
		while($room = mysqli_fetch_assoc($record6))
		{
			echo"<tr>
					<td>".$room['room_no']."</td>
					<td>".$room['check_in']."</td>
					<td>".$room['check_out']."</td>
				</tr>";
		}
		?>
        </tbody>
		</table>
		</div>



    </div>
    </div>

    <div id="Customer" class="tabcontent">
		<table border="1">
            <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>First name</th>
					<th>Last name</th>
                    <th>Email</th>
                    <th>Nationality</th>
                    <th>Phone</th>
                    <th>Room Type</th>
                    <th>Adult</th>
					<th>Children</th>
					<th>Check In</th>
					<th>Check Out</th>
					<th>Arrival Time</th>
					<th>Room Number</th>
                    <th>Status</th>
                    
                </tr>
                <?php
                while($customer = mysqli_fetch_assoc($record7))
                {
                echo"
                <tr>
                    <td>".$customer["id"]."</td>
                    <td>".$customer["first_name"]."</td>
                    <td>".$customer["last_name"]."</td>
                    <td>".$customer["email"]."</td>
                    <td>".$customer["nationality"]."</td>
                    <td>".$customer["phone"]."</td>
                    <td>".$customer["room_type"]."</td>
                    <td>".$customer["adult"]."</td>
					<td>".$customer["children"]."</td>
					<td>".$customer["check_in"]."</td>
					<td>".$customer["check_out"]."</td>
					<td>".$customer["arrival_time"]."</td>
					<td>".$customer["room_no"]."</td>
					<td>".$customer["status"]."</td>
					<td colspan='2'><a target='_blank' href='updatescreen.php?id=$customer[id]&fne=$customer[first_name]&lne=$customer[last_name]&em=$customer[email]&nan=$customer[nationality]&ph=$customer[phone]&rt=$customer[room_type]&ad=$customer[adult]&cd=$customer[children]&cin=$customer[check_in]&cout=$customer[check_out]&at=$customer[arrival_time]&rno=$customer[room_no]&st=$customer[status]'> Update </a>
					<a href='delete.php?id=$customer[id]'>Delete</a></td>
                </tr>";
                }
                ?>
        </table>
		</div>

		<div id="admininfo" class="tabcontent">
		<a target="_blank" href="addadmin.php" class="btn-text"> Add Admin </a>

	    <div class="tabPanel">
		  <table class="content-table">
            <thead>
                <tr>
                    <th>Admin ID</th>
                    <th>Fullname</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Start Date</th>
					<th>Username</th>
					<th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while($admin = mysqli_fetch_assoc($record8))
                {
                echo"
                <tr>
                    <td>".$admin["id"]."</td>
                    <td>".$admin["fullname"]."</td>
                    <td>".$admin["address"]."</td>
                    <td>".$admin["phone"]."</td>
                    <td>".$admin["startdate"]."</td>
                    <td>".$admin["username"]."</td>
					<td colspan='2'><a target='_blank' href='changepassword.php?aid=$admin[id]'> Changepassword </a>
									<a href='deleteadmin.php?aid=$admin[id]'> Delete </a></td>
                </tr>";
                }
                ?>
            </tbody>
           </table>

	    </div>
		</div>

    <script type="text/javascript">
        function admin(evt, operation) {
            var i, tabcontent, tablink;
            tabcontent = document.getElementsByClassName("tabcontent");

            for (i = 0; i < tabcontent.length; i++) {  
                tabcontent[i].style.display = "none";
            }
            tablink = document.getElementsByClassName("tablink");       
            for (i = 0; i < tablink.length; i++) {
                tablink[i].className = tablink[i].className.replace(" active", "");  
            }
            document.getElementById(operation).style.display = "block";  
            evt.currentTarget.className += " active";
            }

			
			var tabButtons = document.querySelectorAll(".tabContainer .buttonContainer button");
			var tabPanels = document.querySelectorAll(".tabContainer .tabPanel");

			function showPanel(panelIndex, colorCode) {
                tabButtons.forEach(function (node) {
                node.style.backgroundColor = "";
                node.style.color = "";
                });

                tabButtons[panelIndex].style.backgroundColor = colorCode;
                tabButtons[panelIndex].style.color = "white";
                tabPanels.forEach(function (node) {
                node.style.display = "none";
                });

                tabPanels[panelIndex].style.display = 'block';
                tabPanels[panelIndex].style.backgroundColor = colorCode;
			}
    </script>


</body>
</html>