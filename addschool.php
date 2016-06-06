<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New School</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="schools.php">Schools</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add School</a></strong>
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
                        <h5>Add a New School <small>Use this form to add a new school</small></h5>
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
                    <form action="schooladd.php"  method="post">
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">School</h3>
                                <p>Add School details below.</p>
                                    <div class="form-group"><label>School Code</label> <input name="scode" type="text" required="" placeholder="Enter School Code" class="form-control"></div>
                                    <div class="form-group"><label>School Name</label> <input type="text" name="sch"
                                    required="" placeholder="Enter School Name" class="form-control">
                                    </div>
                                      <div class="form-group"><label>Ward Location</label> 
                                         <?php
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
                            </div> </div>
                            <div class="col-sm-6">
                                <div>

                                      <div class="form-group"><label>Address</label> <textarea name="addr" type="text" cols="20" rows="5"  class="form-control" required=""></textarea></div>
                               <div class="form-group"><label>Date Added</label> <input name="datea" type="date"  class="form-control" value="<?php echo date('Y')?>" ></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>