<div class="col-md-8 compose-right widget-shadow">
					<div class="panel-default">
						<div class="panel-heading">
							Create Conditional Letter 
						</div>
						<div class="panel-body">
							<div id="printableArea">
							<div class="alert alert-info">
								To: <?php echo $student['firstname']. ' ' .$student['middlename'].' ' .$student['surname']; ?>
							</div>
							<form class="com-mail" method="POST" action="">
								
								<input type="text" class="form-control1 control3" value="Subject : Conditional letter for admission">
								<textarea rows="6" class="form-control1 control2" placeholder="Message :"></textarea>
								</div>
							
								<input type="submit" value="Print"  onclick="printDiv('printableArea')"> 
							</form>
						</div>
					</div>
				</div>

<script type="text/javascript">
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>