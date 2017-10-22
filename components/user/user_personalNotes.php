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
                        Personal Notes
                    </a>
                </div>
            </div>

            <div class="container-fluid">
 
                <div class="row">
                                   <?php
                    foreach($rows as $row){ 

    $title = $row['noteTitle'];
    $content = $row['noteContent']; ?>
                    <div class="col-sm-3">
                        <div class="memo_card">
                            <div class="memo_title">
                                <?php echo $title ?>
                                <a href="#" class="memo_pencil">
                                  <span class="glyphicon glyphicon-pencil"></span>
                                </a>
                            </div>
                            <div class="memo_content">
                                <?php echo $content ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                    <center><a href="" class="btn activity_btn" data-toggle="modal" data-target="#memo_dialog" style="margin-top: 20px;font-weight: bolder;">+</a></center>

                    <div class="modal fade" id="memo_dialog" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Enter your Memo</h4>
                                </div>
                                <div class="modal-body">
                                    <form id="memo_form" method="POST" action="components/control/add_personalNotes.php">
                                       <input type="text" name="noteTitle" placeholder="Enter Note Title">
                                       <textarea name="noteContent"></textarea>
                                   </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" id="submitForm" class="btn btn-default" data-dismiss="modal">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                   <div class="row">
                      <center> </center>
                   </div>
                </div>
                
            </div>
        </div>
        <!-- /#page-content-wrapper -->