

<h3 class="title1">Active Module Leaders </h3>
<div class="bs-example widget-shadow">
<table class="table table-hover">
	<tr>
		<th>Fullname</th>
		<th>D.O.B</th>
		<th>Qualification</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Actions</th>
	</tr>
	<?php


	foreach($active as $row){?>
		<tr>
			<td>
				<a href="index.php?page=lecturer_detail&ml_id=<?php echo $row['id']; ?>">
				<?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></td></a>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['qualification'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td> <a href="index.php?page=savestaff&eMid=<?php echo $row['id'];?>"> Edit </a>|| <a href="index.php?page=savestaff&dMid=<?php echo $row['id'];?>"> Delete </a>|| <a href="index.php?page=savestaff&aMid=<?php echo $row['id'];?>"> Assign</a>|| <a href="index.php?page=savestaff&asid=<?php echo $row['id'];?>"> Archive </a> </td>
		</tr>
		<?php }
		?>
	</table>
</div>



<h3 class="title1"> Archived Module Leaders </h3>
<div class="bs-example widget-shadow">
<table class="table table-hover">
	<tr>
		<th>Fullname</th>
		<th>D.O.B</th>
		<th>Qualification</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Actions</th>
	</tr>
	<?php foreach($archive as $row){ ?>
		<tr>
			<td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['qualification'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td> <a href="index.php?page=savestaff&dCid=<?php echo $row['id'];?>"> Delete </a> || <a  href="index.php?page=savestaff&uasid=<?php echo $row['id'];?>"> Unarchive </a></td>
		</tr>
		<?php }
		?>
	</table>
</div>