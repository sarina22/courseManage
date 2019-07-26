     <div class="main-page">
    <div class="col-md-12 panel-grids">
    <div class="panel panel-info"  style=" height:40vh; overflow-y: scroll; overflow-x: hidden;"> 
        <div class="panel-heading"> 
            <h3 class="panel-title">Announcements</h3> 
        </div> 

        <div class="panel-body">
            
 <?php foreach ($findannouncement as $row) { 
    $admin = new DatabaseTable('admin_tble');
    $lecturer = new DatabaseTable('module_leader_tble');
    $courseL = new DatabaseTable('course_leader_tble');
     $getModule= new DatabaseTable('modules_tble');

     $getAnnoucementModule= $getModule->find('id',$row['module_id']);
         $moduleName= $getAnnoucementModule->fetch();

        if($row['admin_id']!=NULL) {
                $name=$admin->find('id',$row['admin_id']);
                $name=$name->fetch();
            }
            else if($row['course_leader_id']!=NULL) {
                $name=$courseL->find('id',$row['course_leader_id']);
                $name=$name->fetch();
            }
            else if($row['lecturer_id']!=NULL) {
                $name=$lecturer->find('id',$row['lecturer_id']);
                $name=$name->fetch();
            } ?>
            <div class="col-md-4 "> 
                     <div class="panel-body">
                        <center> 
                             <?php echo $row['announcement']; ?> <hr>
                              <h5><b> <?php echo $row['date_added'];?> </b></h5>
                             <h6> Added by <b> <?php echo $name['firstname'].' '.$name['surname'].'['.$moduleName['title'].']';?> </b></h6>
                         </center>
                     </div> 

            </div>
<?php } ?>

            
</div></div>

    
</div>
     <div class="col_3">
                <h2 class="title1">My Modules</h2>
                <!-- use for loop to generate -->
             <?php foreach ($module_taken as $row) {
                    $getModule= new DatabaseTable('modules_tble');
                    $title=$getModule->find('id',$row['module_id']);
                    $title=$title->fetch();
                    ?>
          
        <div class="widget2 col-sm-4 wthree-crd widgettable">
                <div class="r3_counter_box">
                   <p class="title"><?php echo $title['title'];?></p>
                    <div class="stats">
                       <span><a href="index.php?page=front_module_detail&fmid=<?php echo $title['id'];?>">GO</a></span>
                    </div>
                </div>
            </div>
              <?php } ?>

            
            <div class="clearfix"> </div>  
        
        </div>
                

    <!-- <script src="js/index1.js"></script> -->
    
    