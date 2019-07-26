
<div class="grids widget-shadow">
	<h2 class="title1"> Student Details </h2>

	<div class="grids">
		<ul>
			<li><label>First Name:</label><?php echo "    ". $student['firstname'];?> </li>
			<li><label>Middle Name:</label><?php echo "    ". $student['middlename'];?> </li>
			<li><label>Last Name:</label><?php echo "    ". $student['surname'];?> </li>
			<li><label>Date of Birth:</label> <?php echo "    ". $student['dob'];?> </li>
			<li><label>Email:</label><?php echo "    ".$student['email'];?> </li>
			<li><label>Contact:</label><?php echo "    ". $student['contact_number'];?> </li>
			<li><label>Address:</label><?php echo "    ".$student['address'];?> </li>
			<li><label>Other Address:</label><?php echo "    ".$student['address2'];?> </li>
			<li><label>Nationality: </label><?php echo "    ".$student['nationality'];?> </li>
			<li><label>Level: </label><?php echo "    ".$student['level'];?> </li>
			<li><label>Qualification: </label><?php echo "    ".$student['qualification'];?> </li>
			<li><label>Status: </label><?php echo "    ".$student['status'];?> </li>
		</ul>

	</div>

	<div class="imp">
		<h3>Modules Assigned</h3>
		<ol>
		<?php 
		$getModule= new DatabaseTable('modules_tble');
		foreach ($module as $row) { 
			$title=$getModule->find('id',$row['module_id']); 
			$title=$title->fetch();		?>
			<li><?php echo $title['title'];?> </li>
		<?php } ?> 

		</ol>
	</div>
</div>