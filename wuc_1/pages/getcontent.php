<?php
require '../includes.php';


$chapters = new DatabaseTable('chapters_tble');
$content=$chapters->find('id',$_POST['id']);
$contents=$content->fetch();
extract($contents);

$fmid=$module_id;

?>
<form class="form-horizontal" method="POST" action="" enctype="multipart/form-data">


<div class="form-group"> 
<input type="hidden" name="chapter[module_id]" value="<?php echo $module_id;?>">
<input type="hidden" name="chapter[id]" value="<?php echo $id;?>">
<label for="title" class="col-sm-2 control-label">Title:</label>

<div class="col-sm-9"> 
<input type="text" name="chapter[title]" class="form-control" value="<?php if(isset($title)) echo $title;?> " id="subject" placeholder="Title">
</div> 
</div> 

<div class="form-group"> 
<label for="announcement" class="col-sm-2 control-label">Description: </label> 
<div class="col-sm-9"> 
<textarea name="chapter[description]" id="announcement" cols="50" rows="4" class="form-control1"><?php if(isset($description)) echo $description;?></textarea>
</div> 
</div>
<div class="form-group"> 
<label for="file" class="col-sm-2 control-label">File:</label> 
<div class="col-sm-9"> 
<input type="file" name="chapterfile" value="<?php if(isset($filename)) echo $filename;?> " id="announcement" class="form-control1">
</div> 
</div>	

<!-- button -->
<div class="col-sm-offset-2">
<button type="submit" class="btn btn-default" name="addFile">Update </button> </div>
</form>