
<h3 class="title1"> Administrators </h3>
<div class="bs-example widget-shadow">
<table class="table table-hover">
	<tr>
		<th>Fullname</th>
		<th>Username</th>
		<th>D.O.B</th>
		<th>Email</th>
		<th>Contact Number</th>
		<th>Actions</th>
	</tr>
	<?php
	foreach($admin as $row){?>
		<tr>
			<td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></td>
			<td><?php echo $row['username'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td> <a class="red" href="index.php?page=saveadmin&eid=<?php echo $row['id'];?>"> Edit </a>|| <a class="red" href="index.php?page=saveadmin&did=<?php echo $row['id'];?>"> Delete </a></td>
		</tr>
		<?php }
		?>
	</table>
</div>