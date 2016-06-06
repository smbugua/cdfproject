<?php
include('header.php');
$query=mysql_query("SELECT COUNT(voucher_code) as c FROM voucher ORDER BY id DESC");
$result=mysql_fetch_array($query);
$no=$result['c']+1;
?>
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Add New Voucher</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="voucherdetails.php">voucher</a>
                        </li>
                        <li class="active">
                            <strong><a href="#">Add Voucher </a></strong>
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
                        <h5>Add a New Voucher</h5>
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
                    <form action="vouchersadd.php"  method="post">
                        <div class="row" >
                            <div class="col-sm-6 b-r"><h3 class="m-t-none m-b"> Vouchers  </h3>
                           <?php
                                if ($no<=0) {
                                    # code...

                                   echo"<div class='form-group'><label>voucher code</label> <input name='vcode' type='text' readonly='' value='VCH01' class='form-control'></div>";

                                }
                                else
                                    echo "<div class='form-group'><label>voucher code</label> <input name='vcode' type='text' readonly='' value='VCH0$no'class='form-control'></div>";

                                        ?>

                                    <div class="form-group"><label>Voucher Subject</label> <input name="vsubject" type="text" required="" placeholder="Enter voucher subject" class="form-control"></div>

                                     <div class="form-group"><label>voucher amount</label> <input name="vamount" type="number" required="" placeholder="Enter voucher amount" class="form-control"></div>

                            
                                   
                                    <div class="form-group"><label>Voucher description</label> <textarea type="text" name="vdesc" cols="20" rows="5" 
                                    required="" placeholder="Enter Voucher description" class="form-control"> </textarea>
                                    </div>
                                    
                            
                            </div>
                            <div class="col-sm-6">
                                <div>
                               <div class="form-group"><label> Date added </label> <input name="vdate" type="date"  class="form-control" 
                               value="<?php echo Date('Y-m-d');?>" ></div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Save</strong></button>
                                    </div>
                            </div>
                            
                        </div>
                        </form>
                    </div>
                </div>
            </div>