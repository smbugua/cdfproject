<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Staff</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="staffdetails.php">Staff</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add New Staff</a></strong>
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
                        <h5>Add a New Staff</h5>
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
                    <form action="staffadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">New Staff Details </h3>
                               
                                    <div class="form-group"><label>Staff Name</label> <input name="sname" type="text" required="" placeholder="Enter staff's name" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Staff ID number</label> <input name="sidno" type="number" required="" placeholder="Enter staff's ID Number" class="form-control"></div>
                                    
                                    <div class="form-group"><label>Staff Email</label> <input name="semail" type="email" required="" placeholder="Enter staff's email" class="form-control"></div>
                                    
                                      <div class="form-group"><label>Telephone Number</label> <input name="stel" type="number" required="" placeholder="Enter Member's phone number" class="form-control"></div>

                                   <div class="form-group"><label>Status</label> <select name="sstatus" class="form-control">
                                        <option>Active</option>
                                        <option>Terminated</option>
                                        <option>On Leave</option>
                                    </select> </div>
                                    
                                    
                            
                            </div>
                            <div class="col-sm-6">
                                <div>
                               <div class="form-group"><label> Date added </label> <input name="datea" type="date"  class="form-control" 
                               value="<?php echo Date('Y-m-d');?>" ></div>

                              <div class="form-group"><label>Job Description</label>
                                         <?php
                                     $statusQuery="select type_name from stafftype";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='stype' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                    ?>
                           </div>
                                        </div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>

                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>