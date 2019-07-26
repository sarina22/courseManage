
<div class="grids widget-shadow" >
	<h2 class="title1"> Module Leader Details </h2>

	<div class="grids">
		<ul>
			<li><label>First Name:</label><?php echo '    '. $module_leader['firstname'];?> </li>
			<li><label>Middle Name:</label><?php echo '    '. $module_leader['middlename'];?> </li>
			<li><label>Last Name:</label><?php echo '    '. $module_leader['surname'];?> </li>
			<li><label>Date of Birth:</label> <?php echo '    '. $module_leader['dob'];?> </li>
			<li><label>Email:</label><?php echo '    '.$module_leader['email'];?> </li>
			<li><label>Contact:</label><?php echo '    '. $module_leader['contact_number'];?> </li>
			<li><label>Qualification:</label><?php echo '    '. $module_leader['qualification'];?> </li>
			<li><label>Address:</label><?php echo '    '. $module_leader['address'];?> </li>
			<li><label>Roles:</label><?php echo '    '. $module_leader['role'];?> </li>
			<li><label>Specialised Subjects:</label><?php echo '    '. $module_leader['specialise'];?> </li>
			<li><label>Status:</label><?php echo '    '. $module_leader['status'];?> </li>
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