<h3 class="title1"> List Of Students </h3>
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
		<th>Case Paper</th>
	</tr>
	<?php
	foreach($student as $row){?>
		<tr>
			<td><a href="index.php?page=student_details&sd_id=<?php echo $row['id'];?>"><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['nationality'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td><?php echo $row['level'];?></td>
			<td> <?php if ($row['approve']==0) { ?>
					<a href="index.php?page=view_all_students&apid=<?php echo $row['id'];?>">Approve</a>/ <a href="index.php?page=view_all_students&did=<?php echo $row['id'];?>">Delete</a></td> <td> <a href="index.php?page=conditional&cnid=<?php echo $row['id'];?>">Conditional</a> / <a href="index.php?page=unconditional&unid=<?php echo $row['id'];?>">Unconditional</a>
		<?php	}  else { ?>
			<p>APPROVED</p>
			</td>
		 <?php } ?>
		</tr>
		<?php }
		?>
	</table>
</div>

