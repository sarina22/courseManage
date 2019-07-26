<?php extract($findadmin);?>
<h3 class="title1" id="role"> Add Admin </h3>
<div class=" form-grids row form-grids-right" action="index.php?page=saveadmin" method="POST">
<div class="widget-shadow " data-example-id="basic-forms"> 
<div class="form-body">
<form class="form-horizontal" action="index.php?page=saveadmin" method="POST"> 
<input type="hidden" name="admin[id]" value="<?php if(isset ($id)) echo $id; ?>">

<div class="form-group"> 
<label class="col-sm-2 control-label">First Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="admin[firstname]" value="<?php if(isset($firstname)) echo $firstname;?>"> </div>
</div>


<div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Middle Name</label> 

<div class="col-sm-9"> <input type="text" class="form-control" id="inputPassword3" name="admin[middlename]" value="<?php if (isset($middlename)) echo $middlename;?>"> </div>

</div> 

<div class="form-group"> 
<label class="col-sm-2 control-label">Last Name</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"name="admin[surname]" value="<?php if (isset($surname))  echo $surname;?>"> </div>
</div>

<div class="form-group"> 
<label class="col-sm-2 control-label">Date of Birth</label> <div class="col-sm-9"> <input class="form-control" type="date" min="1900-01-01" max="2019-01-01" value="2018-01-01" name="admin[dob]" value="<?php if (isset($dob)) echo $dob;?>"> </div>
</div>


<div class="form-group"> 
<label class="col-sm-2 control-label">Username</label> <div class="col-sm-9"> <input type="text" class="form-control" name="admin[username]" value="<?php if (isset($username)) echo $username;?>"> </div>
</div>


<div class="form-group"> 
<label class="col-sm-2 control-label">Contact Number</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3" name="admin[contact_number]" value="<?php if (isset($contact_number)) echo $contact_number;?>"> </div>
</div>


<div class="form-group"> 
<label class="col-sm-2 control-label">Email</label> <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3"name="admin[email]" value="<?php if (isset($email)) echo $email;?>"> </div>
</div>



<div class="form-group"> 
<label class="col-sm-2 control-label">Password</label> <div class="col-sm-9"> <input type="text" class="form-control" id="inputEmail3"  name="admin[password]" value="<?php if (isset($password)) echo '';?>"> </div>
</div>
 <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default" name="add" value="Add Admin">Add Admin</button> </div> </form> 
</div>
</div>
</div>