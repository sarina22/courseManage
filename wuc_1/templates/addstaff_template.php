<?php extract($moduleLeader);?>

<?php if(isset($_GET['aMid'])) {?>
	<h3 id="role" class="center"> Assign Modules To <?php echo $firstname.' '.$middlename.' '.$surname ?></h3>

	<div class="info center">
		<form action="index.php?page=savestaff" method="POST">
			<input type="hidden" name="lecturer_id" value="<?php echo $_GET['aMid']; ?> ">
				<?php foreach ($getModule as $module) {?>
				<input type="checkbox" name="smodule[]" value="<?php echo $module['id']; ?>">
				<label><?php echo $module['id']; ?> </label>	<br>			
			<?php } ?>
			<input type="submit" name="assign" value="Assign Modules">
	</div>
<?php }
else{
?>

<h3 class="title1" id="role"> Add Module Leader </h3>
<!-------------------- form---------- -->
<div class=" form-grids row form-grids-right">
<div class="widget-shadow " data-example-id="basic-forms"> 
	<div class="form-title">Add Information</div>
<div class="form-body">
<form class="form-horizontal" action="index.php?page=savestaff" method="POST"> 
<input type="hidden" name="moduleLeader[id]" value="<?php if(isset ($id)) echo $id; ?>">

<div class="form-group"> 
<label class="col-sm-2 control-label">First Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="moduleLeader[firstname]" value="<?php if(isset($firstname)) echo $firstname;?>"> </div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Middle Name</label> 
<div class="col-sm-9"> <input type="text" class="form-control" id="inputPassword3" name="moduleLeader[middlename]" value="<?php if (isset($middlename)) echo $middlename;?>"> </div>
</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Last Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"name="moduleLeader[surname]" value="<?php if (isset($surname))  echo $surname;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Date of Birth</label> <div class="col-sm-9"> <input class="form-control" type="date" min="1900-01-01" max="2019-01-01" value="2018-01-01" name="moduleLeader[dob]" value="<?php if (isset($dob)) echo $dob;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Qualification</label> <div class="col-sm-9"> <input type="text" class="form-control" name="moduleLeader[qualification]" value="<?php if (isset($qualification)) echo $qualification;?>"> </div>
</div>


<div class="form-group"> 
<label class="col-sm-2 control-label">Contact Number</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="moduleLeader[contact_number]" value="<?php if (isset($contact_number)) echo $contact_number;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Address</label> 
	<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"  name="moduleLeader[address]" value="<?php if (isset($address)) echo $address;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Email</label> <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"name="moduleLeader[email]" value="<?php if (isset($email)) echo $email;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Password</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"  name="moduleLeader[password]" value="<?php if (isset($password)) echo $password;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Status</label> <div class="col-sm-9"> 
	<select name="moduleLeader[status]" value="<?php if (isset($status)) echo $status;?>" class="form-control1">
		<option value="PROVISIONAL">PROVISIONAL</option>
		<option value="LIVE">LIVE</option>
		<option value="DORMANT">DORMANT</option>
		
	</select> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Role</label> 
	<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"  name="moduleLeader[role]" value="<?php if (isset($role)) echo $role;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Specialist Subjects</label> 
	<div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"  name="moduleLeader[specialise]" value="<?php if (isset($specialise)) echo $specialise;?>"> </div>
</div>

 <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="add" value="Save">Save Module Leader</button> </div> </form> 
</div>
</div>
</div>

	<?php } ?>