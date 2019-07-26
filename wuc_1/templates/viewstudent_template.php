<h3 class="title1"> List Of Active Students </h3>
<div class="bs-example widget-shadow">

<table class="table table-hover">
	<tr>
		<th>Fullname</th>
		<th>Email</th>
		<th>D.O.B</th>
		<th>Address</th>
		<th>Nationality</th>
		<th>Contact Number</th>
		<th>Level</th>
		<th>Actions</th>
	</tr>
	<?php
	foreach($active as $activeStudent){?>
		<tr>
			<td><a href="index.php?page=student_details&sd_id=<?php echo $activeStudent['id'];?>"><?php echo $activeStudent['firstname'].' '.$activeStudent['middlename'].' '.$activeStudent['surname'];?></td>
			<td><?php echo $activeStudent['email'];?></td>
			<td><?php echo $activeStudent['dob'];?></td>
			<td><?php echo $activeStudent['address'];?></td>
			<td><?php echo $activeStudent['nationality'];?></td>
			<td><?php echo $activeStudent['contact_number'];?></td>
			<td><?php echo $activeStudent['level'];?></td>
			<td> <a  href="index.php?page=savestudent&eid=<?php echo $activeStudent['id'];?>"> Edit </a>|| <a  href="index.php?page=savestudent&did=<?php echo $activeStudent['id'];?>"> Delete </a> || <a  href="index.php?page=savestudent&aid=<?php echo $activeStudent['id'];?>"> Assign </a>|| <a  href="index.php?page=savestudent&arid=<?php echo $activeStudent['id'];?>"> Archive </a> </td>
		</tr>
		<?php }
		?>
	</table>
</div>

	<h3 class="title1"> List Of Archived Students </h3>
<div class="bs-example widget-shadow">

<table class="table table-hover">
	<tr>
		<th>Fullname</th>
		<th>Email</th>
		<th>D.O.B</th>
		<th>Address</th>
		<th>Nationality</th>
		<th>Contact Number</th>
		<th>Level</th>
		<th>Actions</th>
	</tr>
	<?php
	foreach($archive as $row){?>
		<tr>
			<td><a href="index.php?page=student_details&sd_id=<?php echo $row['id'];?>"><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></a></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['nationality'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td><?php echo $row['level'];?></td>
			<td> <a  href="index.php?page=savestudent&eid=<?php echo $row['id'];?>"> Edit </a>|| <a  href="index.php?page=savestudent&did=<?php echo $row['id'];?>"> Delete </a> || <a  href="index.php?page=savestudent&uarid=<?php echo $row['id'];?>"> Unarchive </a> </td>
		</tr>
		<?php }
		?>
	</table>
</div>