<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Visitor</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="visitors.php">Visitors</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Visitor</a></strong>
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
                        <h5>Add a New Visitor <small>Use this form to add a new Visitor</small></h5>
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
                    <form action="vadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Visitor </h3>
                                <p>Add Visitor  details below.</p>
                                
                                    <div class="form-group"><label>Visitor Name</label> <input name="vname" type="text" required="" placeholder="Enter Visitor name" class="form-control"></div>
                                    <div class="form-group"><label>Visit Reason</label> <textarea type="text" name="vreason" cols="20" rows="5" 
                                    required="" placeholder="Enter Visitor  Reason" class="form-control"> </textarea>
                                    </div>
                                    
                            
                            </div>
                            <div class="col-sm-6">

                                    <div class="form-group"><label>Visitor Tel</label> <input name="vtel" type="text" required="" placeholder="Enter Tel" class="form-control"></div>
                                <div>
                               <div class="form-group"><label> Visit Date </label> <input name="datea" type="date"  class="form-control" 
                               value="<?php echo Date('mm/dd/yyyy');?>" ></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>