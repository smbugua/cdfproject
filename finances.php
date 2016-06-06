<?php
include('header.php');
$result=mysql_query("SELECT * FROM cashtransactions ORDER BY id DESC");
$no=mysql_num_rows($result);
if ($no==0) {
    # code...
    echo "<script>location.replace('init.php')</script>";

}

else

?>
    <link href="dataTables/dataTables.bootstrap.css" rel="stylesheet" >
    <link href="dataTables/dataTables.responsive.css" rel="stylesheet">
    <link href="dataTables/dataTables.tableTools.min.css" rel="stylesheet">
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-sm-4">
                    <h2>Finances Details</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li class="active">
                            <strong>Finances</strong>
                        </li>
                    </ol>
                </div>
            </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper wrapper-content animated fadeInUp">

                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Finances</h5>
                            <div class="ibox-tools">
                                <a href="addcashbook.php" class="btn btn-primary btn-xs">Add CashBook Record</a>
                                <a href="addvoucher.php" class="btn btn-danger btn-xs">Add Voucher Record</a>
                            </div>
                        </div>
                        <div class="ibox-content">

                            <div class="row m-b-sm m-t-sm">
<div class="table-responsive">
<table class="table table-bordered  dataTables-example"  align="center" id="tableid" datapagesize="20"   >
         <thead>
          <th colspan="11" >

          


        <h4>Financial Details</h4>         
             </th>
             
                <tr> 
                    <th class="header" id="usr">Available Balance</th>  
                    <th class="header" id="usr">Money In</th>  
                    <th class="header" id="usr">Money Out</th>  
                    <th class="header" id="usr">Forwarded Balance</th>  
                    <th class="header" id="usr">Updated Balance</th>  
                    <th class="header" id="usr">Recorded By</th>
                    <th class="header" id="usr">Transaction Type</th>  
                    <th class="header" id="usr">Date Added</th>
                </tr> 
            </thead> 

            <tbody> 
            <?php while ($row = mysql_fetch_array($result)) { ?>           
                <tr > 
                    <td><?php echo $row["available_balance"]?></td>
                    <td><?php echo $row["money_in"]?></td>
                    <td><?php echo $row["money_out"]?></td>
                    <td><?php echo $row["startbal"]?></td>
                    <td><?php echo $row["updated_balance"]?></td>
                    <td><?php echo $row["recorded_by"]?></td>
                    <?php 
                    $ty= $row["ttype"];
                    if ($ty==0 && $ty!=1 && $ty!=2) {
                        # code...
                        echo "<td>Debit</td>";
                    }elseif ($ty==1 && $ty!=0 && $ty!=2) {
                        # code...
                        echo "<td>Credit</td>";
                    }elseif ($ty==2 && $ty!=0 && $ty!=1) {
                        echo "<td>Initialization</td>";
                    }
                    ?>

                    
                    <td><?php echo $row["datemodified"] ?></td>
                 </tr>    
                
                           <?php } ?>
                  
            </tbody> 


            </table>
            </div>
            </div>              
    <script type="text/javascript" src="js/jquery-2.1.1.js"></script>       
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>


             <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
    <style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>