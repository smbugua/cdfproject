<?php
include('header.php');
$query="SELECT  * FROM bursary";
$result=mysql_query($query);
?>
          
           <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Allocation list</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Allocation list</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Bursary Allocations</h5>
                            <div class="ibox-tools">
                                <a href="addbursary.php" class="btn btn-primary btn-xs">Create new Bursary Allocation</a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <div class="row m-b-sm m-t-sm">
                                <div class="col-md-1">
                                    <button type="button" id="loading-example-btn" class="btn btn-white btn-sm" ><i class="fa fa-refresh"></i> Refresh</button>
                                </div>
                                <div class="col-md-11">
                                    <div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
                                </div>
                            </div>

                            <div class="project-list">

                                <table class="table table-hover">
                                <thead>
                                    <td>Bursary Code</td>
                                    <td>School Name</td>
                                    <td>Allocated Amount</td>
                                    <td>Amount Awarded</td>
                                    <td>No of Students</td>
                                    <td>Actions</td>
                                </thead>
                                    <tbody>
                                     <?php while ($row = mysql_fetch_array($result)) { ?>     
                                    <tr>
                                        <td class="project-status">
                                            <span class="label label-primary"><?php echo $row['bursary_code']?></span>
                                        </td>
                                        <td class="project-title">
                                            <a href="bursary_detail.php?id=<?php echo $row['id']?>"><?php echo $row['school_name']?></a>
                                            <br/>
                                            <small>Created <?php echo $row['dateadded']?></small>
                                        </td>
                                        <td class="project-completion">
                                                <small><?php echo $row['amount_awarded']?></small>
                                                <div class="progress progress-mini">
                                                    <div style="width: 48%;" class="progress-bar"></div>
                                                </div>
                                        </td>
                                         <td class="project-title">
                                           
                                            <small><?php echo $row['no_of_students']?></small>
                                        </td>
                                          
                                        <td class="project-actions">
                                            <a href="bursary_detail.php?id=<?php echo $row['id']?>" class="btn btn-white btn-sm"><i class="fa fa-folder"></i> View </a>
                                            <a href="#" class="btn btn-white btn-sm"><i class="fa fa-pencil"></i> Edit </a>
                                        </td>
                                    </tr>
                                   
                              
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                Powered By <strong> Techcube Ltd</strong> Ke.
            </div>
            <div>
                <strong>Copyright</strong> INCOUNTY+ Admin Suite &copy; 2014-<?php echo date('Y')?>
            </div>
        </div>

        </div>
        </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#loading-example-btn').click(function () {
                btn = $(this);
                simpleLoad(btn, true)

                // Ajax example
//                $.ajax().always(function () {
//                    simpleLoad($(this), false)
//                });

                simpleLoad(btn, false)
            });
        });

        function simpleLoad(btn, state) {
            if (state) {
                btn.children().addClass('fa-spin');
                btn.contents().last().replaceWith(" Loading");
            } else {
                setTimeout(function () {
                    btn.children().removeClass('fa-spin');
                    btn.contents().last().replaceWith(" Refresh");
                }, 2000);
            }
        }
    </script>
</body>

</html>
