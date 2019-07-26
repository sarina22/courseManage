<script src="../js/jquery.min.js"></script>

<div class="main-page general">
<h2 class="title1">My Grades</h2>
<div class="row">
<div class="col-md-12 general-grids grids-right widget-shadow">
<ul id="myTabs" class="nav nav-tabs" role="tablist">
<!-- -----------------TAB1------------ -->
<li role="presentation" class="active"><a href="#year1" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">YEAR 1 </a></li>
<!-- -----------------TAB2------------ -->
<li role="presentation" class=""><a href="#year2" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">YEAR 2 </a></li>
<!-- --------------------------TAB3------------------------------- -->
<li role="presentation" class=""><a href="#year3" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">YEAR 3 </a></li>
</ul>


<!-- -------------------CONTENTS-------------------------------------------- -->
<!-- ------------------------ student grades ------------------------------ -->
<div role="tabpanel" class="tab-pane fade in" id="year1" aria-labelledby="dropdown1-tab">
<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
<table class="table table-hover">
	<tr>
		<th>Module Code</th>
		
		<th>Grade</th>
	</tr>

	<?php foreach ($grade as $row) {?>
		<tr>
			<td><?php echo $row['module_id']; ?> </td>
			
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

