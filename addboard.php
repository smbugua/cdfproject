<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Board Member</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="boarddetails.php">Boards</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Board Member</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-10">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add a New Board Member <small>Use this form to add a new Board Member</small></h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                    <form action="Boardadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Board Member Details </h3>
                                <p>Add Board Member's details below.</p>
                                    <div class="form-group"><label>Member Name</label> <input name="mname" type="text" required="" placeholder="Enter Member's name" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Member ID number</label> <input name="midno" type="number" required="" placeholder="Enter Member's ID Number" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Member position</label> <input name="mposition" type="text" required="" placeholder="Enter Member's position" class="form-control"></div>
                                    
                                      <div class="form-group"><label>Telephone Number</label> <input name="mtel" type="number" required="" placeholder="Enter Member's phone number" class="form-control"></div>
                                    
                                    
                            
                            </div>
                            <div class="col-sm-6">
                                <div>
                               <div class="form-group"><label> Date added </label> <input name="mdate" type="date"  class="form-control" 
                               value="<?php echo Date('mm/dd/yyyy');?>" ></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>