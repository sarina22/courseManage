<h3 class="title2"> <?php echo $forums['question'];?></h3>
<div class="grids col-md-12 widget-shadow" style="height:40vh; overflow-y: scroll;">	
	
<?php foreach ($answers as $row) { ?>

<div class="alert alert-success" role="alert">

						<p><?php echo $row['answer'];?></p>

					</div>
					

			<?php } ?>
			</div>

<!-- post an answer -->

	<h4>Post an Answer:</h4>
<div class=" grid-bottom col-md-12 widget-shadow" >

<div class="form-body">

<form class="form-horizontal" action="index.php?page=answer_forum" method="POST"> 
	<input type="hidden" name="foid" value="<?php echo $_GET['foid'];?>">
	<input type="hidden" name="answer[user_id]" value="<?php echo $_SESSION['userId'];?>">
		<input type="hidden" name="answer[question_id]" value="<?php echo $_GET['ansid'];?>">
	<div class="form-group"> 
			<div class="col-sm-9">
			<textarea class="form-control" name="answer[answer]"></textarea>
</div> </div>
	<input type="submit" class="btn btn-default" name="addAnswer" value="POST"> 
</form>
</div>
</div>
