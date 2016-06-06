<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Student</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="students.php">Students</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Student</a></strong>
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
                        <h5>Add a New Student <small>Use this form to add a new school</small></h5>
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
                    <form action="studentadd.php"  method="post">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Student</h3>
                                <p>Add Student details below.</p>
                                    <div class="form-group"><label>Bursary Code</label> <input name="bcode" type="text" required="" placeholder="Enter Bursary Code" class="form-control"></div>
                                    <div class="form-group"><label>Student Name</label> <input type="text" name="std"
                                    required="" placeholder="Enter Student Name" class="form-control">
                                    </div>
                                      <div class="form-group"><label>School</label> 
                                         <?php
                                     $statusQuery="select school_name,school_code from school";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='sch' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                      
                                      
                                    ?>
                            </div> 
                            <div class="form-group">
                                <label>Ward</label>    <?php
                                     $statusQuery="select ward_name from ward";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='ward' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value=$statusRow[0]>$statusRow[0]</option>";
                                      }

                                      echo "</select><br/>";
                                      
                                      
                                    ?>
                               
                            </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                                <div class="form-group"><label>Parent Name</label> <input name="pname" placeholder="parent name" type="text" class="form-control" required=""></div>

                                <div class="form-group"><label>Parent ID</label> <input name="pid" placeholder="parent ID" type="text" class="form-control" required=""></div>

                                      <div class="form-group"><label>Parent Phone No</label> <input placeholder="parent tel" name="parenttel"  type="text" class="form-control" required=""></div>

                                      <div class="form-group"><label>Allocated Amount</label> <input placeholder="amount allocated" name="amnt"  type="number" class="form-control" ></div>
                               <div class="form-group"><label>Date Added</label> <input name="datea" value="<?php echo date('yyyy-mm-dd') ?>" type="date"  class="form-control"  ></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>