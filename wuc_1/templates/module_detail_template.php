<?php $mid=$_GET['mid'];?>

<h2> Module Details For <?php echo $module['title']; ?></h2>
<h2 class="title1">Teachers Assigned</h3>
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


	foreach($mLeader as $row){?>
		<tr>
			<td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['qualification'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td> <a class="red" href="index.php?page=module_detail&mid=<?php echo $mid;?>&umid=<?php echo $row['id'];?>"> Un-assign </a> </td>
		</tr>
		<?php }
		?>
	</table>
</div>



<h2 class="title1"> Students Assigned </h3>
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
	foreach($student as $row){?>
		<tr>
			<td><?php echo $row['firstname'].' '.$row['middlename'].' '.$row['surname'];?></td>
			<td><?php echo $row['email'];?></td>
			<td><?php echo $row['dob'];?></td>
			<td><?php echo $row['address'];?></td>
			<td><?php echo $row['nationality'];?></td>
			<td><?php echo $row['contact_number'];?></td>
			<td><?php echo $row['level'];?></td>
			<td> <a class="red" href="index.php?page=module_detail&mid=<?php echo $mid;?>&usid=<?php echo $row['id'];?>"> Un-assign </a> </td>
		</tr>
		<?php }
		?>
	</table>
</div>