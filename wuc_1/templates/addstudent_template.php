<?php extract($findStudent); ?>

<?php if(isset($_GET['aid'])) {?>
	<h3 id="role" class="center"> Assign Modules To <?php echo $firstname.' '.$middlename.' '.$surname ?></h3>

	<div class="grids">
		<form action="index.php?page=savestudent" method="POST">
			<input type="hidden" name="student_id" value="<?php echo $_GET['aid']; ?> ">
				<?php foreach ($getModule as $module) {?>
				<input type="checkbox" name="smodule[]" value="<?php echo $module['id'];?>">
				<label><?php echo $module['id'].'['.$module['title'].']'; ?> </label>	<br>			
			<?php } ?>
			<input type="submit" name="assign" value="Assign Modules">
	</div>
<?php }
else{
?>
<h3 class="title1" id="role"> Add Student </h3>
<div class=" form-grids row form-grids-right">
<div class="widget-shadow " data-example-id="basic-forms"> 
<div class="form-title">Import Student From File</div>
<div class="form-body">
<form class="form-horizontal" action="index.php?page=savestudent" method="POST" enctype="multipart/form-data"> 
<div class="form-group"> 
<label class="col-sm-2 control-label">Import </label> <div class="col-sm-9">
<input type="file" class="form-control" id="inputEmail3" name="file" required="true"> </div>
</div>

<div class="form-group"> 
 <div class="col-sm-9"> <button style="margin-left: 25%;" type="submit" class="btn btn-default" name="Import" value="Import">Import</button> </div>
</div>
</form>
</div>
</div>
</div>

<!-------------------- form---------- -->
<div class=" form-grids row form-grids-right">
<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">Add Via Form</div>
<div class="form-body">
<form class="form-horizontal" action="index.php?page=savestudent" method="POST"> 
<input type="hidden" name="student[id]" value="<?php if(isset ($id)) echo $id; ?>">

<div class="form-group"> 
<label class="col-sm-2 control-label">First Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="student[firstname]" value="<?php if(isset($firstname)) echo $firstname;?>"> </div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name</label> 
<div class="col-sm-9"> <input type="text" class="form-control" id="inputPassword3" name="student[middlename]" value="<?php if (isset($middlename)) echo $middlename;?>"> </div>
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Last Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"name="student[surname]" value="<?php if (isset($surname))  echo $surname;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Date of Birth</label> <div class="col-sm-9"> <input class="form-control" type="date" min="1900-01-01" max="2019-01-01" value="2018-01-01" name="student[dob]" value="<?php if (isset($dob)) echo $dob;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Address</label> <div class="col-sm-9"> <input type="text" class="form-control" name="student[address]" value="<?php if (isset($address)) echo $address;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Address-2</label> <div class="col-sm-9"> <input type="text" class="form-control" name="student[address2]" value="<?php if (isset($address2)) echo $address2;?>"> </div>
</div>


<div class="form-group"> 
<label class="col-sm-2 control-label">Nationality</label> <div class="col-sm-9"> <input type="text" class="form-control" name="student[nationality]" value="<?php if (isset($nationality))  echo $nationality;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Contact Number</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="student[contact_number]" value="<?php if (isset($contact_number)) echo $contact_number;?>"> </div>
</div>


<div class="form-group"> 
<label class="col-sm-2 control-label">Email</label> <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"name="student[email]" value="<?php if (isset($email)) echo $email;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Password</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"  name="student[password]" value="<?php if (isset($password)) echo '';?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Qualification</label> <div class="col-sm-9"> <input type="text" class="form-control" name="student[qualification]" value="<?php if (isset($qualification)) echo $qualification;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Course</label> <div class="col-sm-9"> <input type="text" class="form-control" name="student[course_id]" value="c12"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Status</label> <div class="col-sm-9"> 
	<select name="student[status]" value="<?php if (isset($status)) echo $status;?>" class="form-control1">
		<option value="PROVISIONAL">PROVISIONAL</option>
		<option value="LIVE">LIVE</option>
		<option value="DORMANT">DORMANT</option>
		
	</select> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Level</label> <div class="col-sm-9"> 
	<select name="student[level]" value="<?php if (isset($level)) echo $level;?>" class="form-control1">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		
	</select> </div>
</div>

 <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="add" value="Save Student">Save Student</button> </div> </form> 
</div>
</div>
</div>

	<?php } ?>