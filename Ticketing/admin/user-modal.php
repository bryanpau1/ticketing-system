<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New Agent</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form id="addForm">
					<div class="row">
						<div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Name:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
                        </div>
                         <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Username:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="susername" id="susername" class="response" placeholder="Enter your username" required>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Email:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" id="email"  class="response" placeholder="Enter your email" required>
                        </div>
                       
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Password:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="password" class="form-control" name="spassword" id="spassword" placeholder="Enter your password" required>
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                           
                        </div>
                        <div class="col-md-10">
                            
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="addbutton" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>


<!-- Edit -->
    <div class="modal fade" id="editmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit User</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <form id="editForm">
                    <div class="row">
                      <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Name:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter your full name" required>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Email:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="eemail" id="eemail" placeholder="Enter your email" required>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Username:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eusername" id="eusername" placeholder="Enter your username" required>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Password:</label>
                        </div>
                        <div class="col-md-10">
                           <input type="password" class="form-control" name="epassword" id="epassword" placeholder="Enter your password" required>
                        </div>
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Level:</label>
                        </div>
                        <div class="col-md-10" >
                         <select class="form-control" name="level" id="level">
                         <option value="">Select User</option>
                         <option value = "Agent">Agent</option>
                         <option value = "User">User</option>
                        </select>
                        </div>
                        </div>
                    </div>
                    <div align="right">
                     <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="editbutton" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Update</a></div>
            </div>

                    <div style="height:10px;"></div>
                    <div class="row">
                       
                    </div> 
                </div>
                <div class="modal-footer">
                   
                </form>
                </div>
                
            </div>
        </div>
    </div>

<!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete User</h4></center>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <h5><center>Name: <strong><span id="dname"></span></strong></center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="button" id="delbutton" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </div>
                
            </div>
        </div>
    </div>
