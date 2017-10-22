        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" id="container2">
                
                <div id="navbar">

                	<a href="#menu-toggle" class="btn btn-outline" id="menu-toggle">
                		<!-- HamBurger Button -->
	                		<div class="container2">
							  <div class="bar1"></div>
							  <div class="bar2"></div>
							  <div class="bar3"></div>
							</div>
						<!-- HamBurger Button -->
					</a>
					<a class="btn btn-outline">
						To Do List
					</a>
            	</div>
            </div>
            <div class="container-fluid">
            	<div class="row">
            		<div class="col-sm-6">
            			
            			<div class="personal_todo">
            				<div class="personal_todo_title">
            					Personal To Do

                                          <a href="" class="btn activity_btn" data-toggle="modal" data-target="#memo_dialog" style="font-weight: bolder;float: right;color: white">+</a>

                                          <div class="modal fade" id="memo_dialog" role="dialog" style="color: black;">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">Enter your Task</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="memo_form" method="POST" action="components/control/add_toDoList.php">
                                                               <input type="text" name="toDoTitle" placeholder="Enter Todo Title"><br/>
                                                               <label>Enter Due Date</label>
                                                               <input type="date" name="toDoDate">
                                                           </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                            <button type="submit" id="submitForm" class="btn btn-default" data-dismiss="modal">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                           </div>
            				</div>
                                    
            				<div class="personal_todo_list">
                                          <?php
                                          foreach($rows as $row){ 

                                        $title = $row['toDoTitle'];
                                        $date = $row['toDoDate']; ?>
            					<div class="personal_todo_card">
            						<div class="row">
            							<div class="col-sm-7">
                                                            <?php echo $title ?>
            							</div>
            							<div class="col-sm-3">
            								Date: <?php echo $date?>
            							</div>
            							<div class="col-sm-2" style="text-align: center;">
            								<input type="checkbox" name="" class="todo_checkbox" >
            							</div>                                                
            						</div>            						
            					</div>
                                          <?php } ?>
            				</div>
            			</div>
            		</div>
            		<div class="col-sm-6">
            			
            			<div class="shared_todo">
            				<div class="shared_todo_title">
            					Shared To Do
            				</div>
            				
            			</div>
            		</div>
            	</div> 
            </div>
        </div>
        <!-- /#page-content-wrapper -->