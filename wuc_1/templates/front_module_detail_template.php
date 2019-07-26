<script src="../js/jquery.min.js"></script>

<div class="main-page general">
<h2 class="title1"><?php echo $mod_name['title']; ?></h2>
<div class="row">
<div class="col-md-12 general-grids grids-right widget-shadow">
<ul id="myTabs" class="nav nav-tabs" role="tablist">
<!-- -----------------TAB1------------ -->
<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Module Overview</a></li>
<!-- -----------------TAB2------------ -->

<?php if ($_SESSION['type']=='moduleLeader'){ ?> 
<li role="presentation" class="dropdown"> <a href="#" id="content" class="dropdown-toggle" data-toggle="dropdown" aria-controls="content-contents" aria-expanded="false">Contents <span class="caret"></span></a> 

<ul class="dropdown-menu" aria-labelledby="content1" id="content1-contents"> 
<li class=""><a href="#content1" role="tab" id="content1-tab" data-toggle="tab" aria-controls="content1" aria-expanded="false">Add Contents</a></li>

<li class=""><a href="#content2" role="tab" id="content2-tab" data-toggle="tab" aria-controls="content2" aria-expanded="false">View Contents</a></li>
</ul>
</li> 
<?php } else{ ?>
<li role="presentation" class=""><a href="#content2" role="tab" id="content2-tab" data-toggle="tab" aria-controls="content2" aria-expanded="true">Contents</a></li> <?php } ?>
<!-- -----------------TAB3------------ -->

<li role="presentation" class=""><a href="#announcement" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="false">Announcements</a></li>

-<!----------------- -----------------TAB4------------------------- -->
<?php if ($_SESSION['type']=='moduleLeader'){ ?> 

<li role="presentation" class="dropdown"> <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Assessment <span class="caret"></span></a> 

<ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents"> <li class=""><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="false">Add Assessment</a></li>

<li class=""><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="false">View Submissions</a></li>

</ul>
</li> 
<?php } else{ ?>
<li role="presentation" class="dropdown"> <a href="#" id="myTabDrop1" class="dropdown-toggle" data-toggle="dropdown" aria-controls="myTabDrop1-contents" aria-expanded="false">Assessment <span class="caret"></span></a> 

<ul class="dropdown-menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents"> <li class=""><a href="#dropdown1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1" aria-expanded="false">View Assignmet</a></li>

<li class=""><a href="#dropdown2" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2" aria-expanded="false">Submit Assignment</a></li>

</ul>
</li> <?php } ?>

<!-- --------------------------TAB4------------------------------- -->


</ul>


<!-- -------------------CONTENTS-------------------------------------------- -->
<!-- ------------------------------for module overview-------------------------- -->
<div id="myTabContent" class="tab-content scrollbar1" tabindex="5001" style="overflow: hidden; outline: none;"> <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab"> <p>
<?php if ($_SESSION['type']=='moduleLeader'){ ?> 

<div class="form-body">
<form class="form-horizontal" method="POST" action="">
<div class="form-group"> 
<input type="hidden" name="getModule[id]" value="<?php echo $_GET['fmid'];?>">
<label for="getModule[title]" class="col-sm-2 control-label">Title:</label>
<div class="col-sm-9"> 
<input type="text" name="getModule[title]" class="form-control" id="subject" value="<?php echo $mod_name['title']; ?>">
</div> 
</div> 

<div class="form-group"> 
<label for="getModule[description]" class="col-sm-2 control-label">Description: </label> 
<div class="col-sm-9"> 
<textarea name="getModule[description]" id="module-overview" cols="50" rows="10" class="form-control1" style="height: 100px;"><?php echo $mod_name['description']; ?></textarea>
</div> 
</div>

<!-- button -->
<div class="col-sm-offset-2">
<button type="submit" class="btn btn-default" name="addoverview">Save</button> </div>
</form>
</div>
<?php } ?>
<?php echo $mod_name['description']; ?> </p> </div> 
<!-- ------------------------------end module overview-------------------------- -->

<!-- ----------------------assignment------------------------------- -->
<div role="tabpanel" class="tab-pane fade" id="dropdown1" aria-labelledby="dropdown1-tab">

<?php if($_SESSION['type']=='moduleLeader')
{ ?>
<div class="form-title">
<h4>New Assignment</h4>
</div>

<div class="form-body">
<form class="form-horizontal" method="POST" action="index.php?page=front_module_detail" enctype="multipart/form-data">
<!--------------------------- title------------- -->
<input type="hidden" name="assignment[module_id]" value="<?php if(isset($module_id)) echo $module_id; else echo $_GET['fmid'];?> ">

<div class="form-group"> 
<label for="title" class="col-sm-2 control-label">Title</label>

<div class="col-sm-9"> 
<input type="text" name="assignment[title]" class="form-control" value="<?php if(isset($title)) echo $title;?> " placeholder="Topic">
</div> 
</div> 
<!--------------------------- title------------- -->



<!--------------------------- file -------- ------------- -->
<div class="form-group"> 
 	 		<label for="file" class="col-sm-2 control-label">File:</label> 
	 	 		<div class="col-sm-9"> 
	 	 			<input type="file" name="assignmentFile" value="<?php if(isset($file)) echo $file;?> " class="form-control1">
	 	 		</div> 
</div>	
								
<!--------------------------- date -------- ------------- -->
<div class="form-group"> 
<label for="assignment[start_date]" class="col-sm-2 control-label">Start Date:</label> 
<div class="col-sm-9"> 
<input type="date" value="<?php if(isset($start_date)) echo $start_date;?>" name=" assignment[start_date]" class="form-control1">
</div> 
</div>

<div class="form-group"> 
<label for="assignment[deadline]" class="col-sm-2 control-label">Submission Date:</label> 
<div class="col-sm-9"> 
<input type="date" value="<?php if(isset($deadline)) echo $deadline;?>"  name=" assignment[deadline]" class="form-control1">
</div> 
</div>

<!-- button -->
<div class="col-sm-offset-2">
<button type="submit" class="btn btn-default" name="addAssignment">Add Assignment </button> 
</div> 
</form> 
</div> <?php	} ?>

<!-- student assessment -->

<?php foreach ($getassessment as $asses) {?>
<h3 class="title1"> <?php echo $asses['title']; ?> </h3>
<ul style="list-style: none;">
<li > <a href="<?php echo $asses['file'];?>"><?php echo $asses['name'];?> </a> </li>

<li style="color: #f05532;"> Deadline: <?php echo $asses['deadline'];?> </li>
</ul>

<hr>
<?php } ?>
</div>

<!-- ---------------------------- assignment 2---------------------------------->
<div role="tabpanel" class="tab-pane fade" id="dropdown2" aria-labelledby="dropdown2-tab"> 
<?php if($_SESSION['type']=='moduleLeader'){?>	
<div class="tables">
<h2 class="title1">Submissions</h2>
<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 
<table class="table table-hover">
<thead> 
<tr>
<th>Student Id</th> 

<th>File</th> 
<th>Action</th>
<th>Grade</th> </tr> 
</thead>
<tbody>
<?php foreach ($sAssignment as $row ) {?>
 <tr>
 	<form method="POST" action="index.php?page=front_module_detail">
 	<input type="hidden" name="assignment[student_id]" value="<?php echo $row['student_id'];?> ">
 	<input type="hidden" name="assignment[module_id]" value="<?php echo $_GET['fmid'];?> ">
<td><?php echo $row['student_id']; ?> </td> 
<td><?php echo $row['name']; ?> </td>
<td><a href="<?php echo $row['filepath']; ?>">Download</a></td>
<td><select name="assignment[grade]">
<option value="A+">A+</option>
<option value="A">A</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B">B</option>
<option value="B-">B-</option>
<option value="C+">C+</option>
<option value="C">C</option>
<option value="C-">C-</option>
<option value="D+">D+</option>
<option value="D">D</option>
<option value="D-">D-</option>
<option value="F">F</option>
</select></td>
<td><input type="submit" name="addGrade" value="Add Grade"></td>
</form>

 </tr>

<?php } ?>

</tbody>
</table>
</div>

</div>	<?php } ?>

<!-- student -->
<?php if($_SESSION['type']=='student'){ ?>
	<form action="index.php?page=front_module_detail" method="POST" class="form-horizontal" enctype="multipart/form-data">
	<div class="form-group"> 
		<input type="hidden" name="submission[student_id]" value="<?php echo $_SESSION['userId'];?>">
			<input type="hidden" name="submission[module_id]" value="<?php echo $_GET['fmid'];?> ">

		<label for="submissionFile" class="col-sm-2 control-label">File:</label> 
		<div class="col-sm-9"> 
			
		<input type="file" name="submissionFile" class="form-control1">
		</div>
	</div>

		<!-- button -->
		<div class="col-sm-offset-2">
		<button type="submit" class="btn btn-default" name="submitAssignment">Submit</button> </div> 
 	
</form>

 <?php } ?>
</div>
<!-- ---------------------------- end assignment ---------------------------------->


<!-- --------------------------------for announcement-------------------------- -->

<div role="tabpanel" class="tab-pane fade" id="announcement" aria-labelledby="home-tab"> 
<div class="bs-example widget-shadow" data-example-id="hoverable-table"> 

<table class="table table-hover">
<tr class="form-title">
<th>Title</th>
<th>Announcement</th>
<th>Date</th>
<?php if ($_SESSION['type']=='moduleLeader') { ?> <th>Actions</th> <?php } ?>
</tr>
<?php
foreach($getAnnouncement as $row){?>
<tr>
	<td><?php echo $row['title'];?> </td>
<td><?php echo $row['announcement'];?> </td>
<td><?php echo $row['date_added']; ?> </td>
<?php if ($_SESSION['type']=='moduleLeader') { ?>
<td> <a class="red" href="index.php?page=post_announcement&eAid=<?php echo $row['id'];?>"> Edit </a>|| <a class="red" href="index.php?page=post_announcement&dAid=<?php echo $row['id'];?>"> Delete </a> </td>  <?php } ?>
</tr>
<?php } ?>
</table>


</div>

</div>


<!-- --------------------contents------------------------ -->
<div rol="tabpanel" class="tab-pane fade" id="content1" aria-labelledby="content1-tab">
<div class="form-body">
<form class="form-horizontal" method="POST" action="index.php?page=front_module_detail" enctype="multipart/form-data">
<input type="hidden" name="module_id" value="<?php echo $_GET['fmid'];?>">
<input type="hidden" name="chapter[id]" value="<?php if(isset($id)) echo $id; ?> ">
<input type="hidden" name="chapter[module_id]" value="<?php echo $_GET['fmid']; ?>">
<div class="form-group"> 
<label for="title" class="col-sm-2 control-label">Title:</label>

<div class="col-sm-9"> 
<input type="text" name="chapter[title]" class="form-control" value="<?php if(isset($title)) echo $title;?> " id="subject" placeholder="Title">
</div> 
</div> 

<div class="form-group"> 
<label for="announcement" class="col-sm-2 control-label">Description: </label> 
<div class="col-sm-9"> 
<textarea name="chapter[description]" value="<?php if(isset($description)) echo $description;?>" cols="50" rows="4" class="form-control1"></textarea>
</div> 
</div>

<div class="form-group"> 
<label for="chapterfile" class="col-sm-2 control-label">File:</label> 
<div class="col-sm-9"> 
<input type="file" name="chapterfile" value="<?php if(isset($filename)) echo $filename;?> " id="announcement" class="form-control1">
</div> 
</div>	

<!-- button -->
<div class="col-sm-offset-2">
<button type="submit" class="btn btn-default" name="addFile">Post </button> </div>
</form>
</div>
</div>
<!-- content1 End -->


<!-- content2 start -->
<div id="getcontent"> </div>
<div role="tabpanel" class="tab-pane fade" id="content2" aria-labelledby="content2-tab">

<?php foreach ($files as $file) {?>
<h3> <?php echo $file['title']; ?>
<h5>
<?php if($_SESSION['type']=="moduleLeader"){?>
<a style="float:right;" class="btn btn-default" href="index.php?page=front_module_detail&cid=<?php echo $file['id'];?>&fmid=<?php echo $_GET['fmid'];?>"> Delete </a> <button style="float:right;" value="<?php echo $file['id'];?>" class="btn btn-default"> Edit </button>
<?php }?>
</h5>
</h3> <br>
<li style="list-style: none;"> <a href="<?php echo $file['filename'];?>"><?php echo $file['name'];?> </a> </li>
<h5><?php echo $file['description'];?> </h5>	
<hr>

<?php } ?>




</div>

<!-- content 2 end ------------>
</div>
</div>
</div>
</div>
</div>


<script type="text/javascript">
$(document).ready(function() {
$(".edit").click(function(){
var a= $(this).val();
$.ajax({
data:{"id":a},type:'post',url: "../pages/getcontent.php", success: function(result){
$("#getcontent").html(result);
}});

});
});
</script>