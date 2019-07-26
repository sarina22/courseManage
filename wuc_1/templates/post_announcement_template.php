<?php
	extract ($findAnnouncement);
?>

<div class="widget-shadow" data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Post Annoucement</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal" method="POST" action="index.php?page=post_announcement">
				<!--------------------------- subject------------- -->

						<input type="hidden" name="announcement[id]" value="<?php if (isset($id)) echo($id); ?>">
								 		
				<input type="hidden" name="announcement[lecturer_id]" value="<?php echo $_SESSION['userId'];?>">
							 <div class="form-group"> 
								 	<label for="subject" class="col-sm-2 control-label">Subject</label>

								 	 <div class="col-sm-9"> 
								 	 	<input type="text" name="announcement[title]" value="<?php if(isset($title)) echo $title;?>" class="form-control" id="subject" placeholder="Topic">
								 	 	 </div> 
								 	 	</div> 
<!--------------------------- subject------------- -->


								 	 	<!-- module select dropdown -->
								 	 	<div class="form-group"> 
								 	 		<label for="selectModule" class="col-sm-2 control-label">Module</label>
									<div class="col-sm-8">

					<select name="announcement[module_id]" id="selectModule" class="form-control1">

					 <?php foreach ($module_taken_by_lec as $row) {
                  	$getModule= new DatabaseTable('modules_tble');
                  	$title=$getModule->find('id',$row['module_id']);
                  	$title=$title->fetch();
                  	?>
						<option value="<?php echo $title['id'];?>" <?php if (isset($_GET['eAid'])) { ?> selected="true" <?php } ?> > <?php  echo $title['title'];?>  	</option> <?php } ?>
									</select></div>

								</div>
			<!-------------------------- module select dropdown --------------------------->


		<!--------------------------- message -------- ------------- -->
								 	 	<div class="form-group"> 
								 	 		<label for="announcement" class="col-sm-2 control-label">Message</label> 
								 	 		<div class="col-sm-9"> 
								 	 			<textarea name="announcement[announcement]" id="announcement" cols="50" rows="8" class="form-control1"><?php if(isset($announcement)) echo $announcement;?></textarea>
								 	 			
								 	 		</div> 


								 	 	</div>
<!--------------------------- message -------- ------------- -->

								<!-- button -->
								 	 	  <div class="col-sm-offset-2">
								 	 	  	  <button type="submit" class="btn btn-default" name="add">Post </button> </div> </form> 
							</div>
						</div>