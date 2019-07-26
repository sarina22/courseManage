<script src="../js/jquery.min.js"></script>

<div class="main-page general">
<h2 class="title1">Student Grades</h2>
<div class="row">
<div class="col-md-12 general-grids grids-right widget-shadow">



<!-- -------------------CONTENTS-------------------------------------------- -->
<!-- ------------------------ student grades ------------------------------ -->
<div role="tabpanel" class="tab-pane fade in" id="year1" aria-labelledby="dropdown1-tab">
<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
<table class="table table-hover">
	<tr>
		<th>Student ID</th>
		<th>Name</th>
		<th>Grade</th>
	</tr>

	<?php foreach ($grade as $row) {
		$student_name= new DatabaseTable('students_tble');
		$sname= $student_name->find('id',$row['student_id']);
		$sname= $sname->fetch(); ?>
		<tr>
			<td><?php echo $row['student_id']; ?> </td>
			<td><?php echo $sname['firstname'].'  '.$sname['middlename'].'  '. $sname['surname'];?></td>
			<td><?php echo $row['grade']; ?> </td>
		</tr>
<?php } ?>
</table>
</div>
</div>






</div>












<!-- end -->
</div>
</div>

