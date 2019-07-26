<!-- Ask question-->

	<h3 class="title1"> Ask a Question</h3>
<div class=" grids  widget-shadow" style="padding: 1.5em 1em; margin-bottom: 1em;" >

<div class="form-body">

<form class="form-horizontal" action="index.php?page=forum&foid=<?php echo $_GET['foid'];?>" method="POST"> 
	<input type="hidden" name="question[user_id]" value="<?php echo $_SESSION['userId'];?>">
		<input type="hidden" name="question[module_id]" value="<?php echo $_GET['foid'];?>">
	<div class="form-group"> 
			<div class="col-sm-9">
			<textarea class="form-control" name="question[question]"></textarea>
</div> </div>
<div class="col-sm-9">
	<button type="submit" class="btn btn-default" name="addquestion">Post </button> 
</div>
</form>
</div>
</div>

<div class="col-md-12" >
<h3 class="title1">Questions</h3></div>
<div class="col-md-12 general-grids grids-right widget-shadow" style="overflow-y: scroll; height: 40vh;">
				
					<?php foreach($forums as $row) { ?>
						<div class="well">
						<a href="index.php?page=answer_forum&ansid=<?php echo $row['id'];?>"><?php echo $row['question'];?> </a>
							</div>
							<div class="user-name"><p> Asked by:
								<?php echo $getUser['email'];?></p></div>
								<div class="clearfix"></div>
				<?php } ?>
					
				</div>

