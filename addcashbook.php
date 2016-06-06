<?php
include('header.php');
$balquery=mysql_query("SELECT available_balance as bal FROM cashtransactions ORDER BY id DESC LIMIT 1");
$bal=mysql_num_rows($balquery);
$balresult=mysql_fetch_array($balquery);
$balamt=$balresult['bal'];
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add Cash Entry</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="moneyin.php">Money In</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Cash Record</a></strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
       <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
            <div class="col-lg-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Add a New Cash Record  <small>Use this form to add a new Cash Record</small></h5>
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
                    <form action="imprestadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-10 b-r"><h3 class="m-t-none m-b">Cash Record </h3>
                                <p>Add Cash Record  details below.</p>
                                    <div class="form-group"><label>Money In</label> <input id="monin" name="monin" type="number" required="" placeholder="Money In" class="form-control" onkeyup="javascript:balance();" ></div>
                                    <?php
                                    if ($bal==0) {
                                        # code...
                                        echo " <div class='form-group'><label>Available Balance</label> <input id='bal' name='abal' type='number'readonly='' value='0' class='form-control'></div>";
                                    }

                                    else
                                        echo "
                                    <div class='form-group'><label>Available Balance</label> <input id='bal' name='abal' type='number'readonly='' value='$balamt' class='form-control'></div>";
                                    ?>

                                     <div class="form-group"><label>New Balance</label> <input id="ubal" name="upbal" type="number" readonly=""  class="form-control"></div>

                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>

                            <script type="text/javascript">
                                function balance(){
                                    var mon=document.getElementById('monin').value;
                                    var bala=document.getElementById('bal').value;
                                    var sumbal=parseFloat(mon)+parseFloat(bala);
                                    document.getElementById('ubal').value=sumbal;
                                }

                            </script>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>