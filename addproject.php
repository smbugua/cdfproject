<?php
include('header.php');
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Project</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="projects.php">Projects</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Project</a>a></strong>
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
                        <h5>Add a New Project <small>Use this form to add a new project</small></h5>
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
                   
                        <div class="row">
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Projects</h3>
                                <p>Add new project details below.</p>
                                <form action="projectadd.php" method="post">
                                    <div class="form-group"><label>Project Code</label> <input name="pcode" type="text" required="" placeholder="Enter Project Code" class="form-control"></div>
                                    <div class="form-group"><label>Project Title</label> <input name="pname" type="text" placeholder="Project Title" required="" class="form-control"></div>
                                      <div class="form-group"><label>Ward</label> 
                                      <?php
                                      	$statusQuery="select ward_code,ward_name from ward";
                                        $statusResult=queryMysql($statusQuery);
                                        $no = mysql_num_rows($statusResult);
                                      echo "<select name='pward' type='text' class='form-control' >";
                                    for ($i = 0 ; $i < $no ; ++$i)
                                      {
                                        $statusRow = mysql_fetch_row($statusResult);
                                        echo "<option value=$statusRow[0]>$statusRow[1]</option>";
                                      }

                                      echo "</select><br/>";?>
                                      </div>
                                    
                                
                            </div>
                            <div class="col-sm-6">
                                <div>
                                 <div class="form-group"><label>Project Cost</label> <input name="pamnt" type="number" placeholder="Estimated Project Cost" class="form-control" required=""></div>

                                 <div class="form-group"><label>Project Description</label> <textarea name="pdesc" type="text" cols="25" rows="7" placeholder="Project Description" class="form-control"></textarea></div>
                                 <div class="form-group"><label>Date Added</label> <input name="pdate" type="date"  class="form-control"></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>