<?php
session_start();
if(!isset($_SESSION["admin"]))
{
    ?>
    <script type="text/javascript">
        window.location="index.php";
    </script>
    <?php
}
error_reporting(0);
include "header.php";
include "leftside.php";
?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="row">
            <div class="col-lg-12" style="min-height:800px;">
                <section class="card" style="min-height: 400px;">

                    <div class="row">

                        <div class="card-body col-md-12">

                            <div class="adv-table">
                                <table  class="display table table-bordered table-striped" id="dynamic-table1">
                                    <thead>
                                    <tr>
                                        <th>FNO</th>
                                        <th>NAME</th>
                                        <th>ADDR</th>
                                        <th>DOB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>DOM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                        <th>CNO</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                    if (PHP_SAPI == 'cli')
                                        die('This example should only be run from a Web Browser');
                                    require_once 'Classes/PHPExcel.php';
                                    $objPHPExcel = new PHPExcel();
                                    $objPHPExcel = PHPExcel_IOFactory::load("excel/newlist.xlsx");
                                    $rows = $objPHPExcel->setActiveSheetIndex(0)->getHighestRow();
                                    $cols = $objPHPExcel->setActiveSheetIndex(0)->getHighestDataColumn();


                                    for ($i = 3; $i <= $rows; $i++) {
                                        $FNO = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getValue();
                                        $NAME = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getValue();
                                        $ADDR = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getValue();
                                        
										$DOB="";
										
										$DOB1 = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getValue();
										
										if($DOB1=="")
										{
											$DOB="";
										}
										else{
											$DOB = date('d-M-y', PHPExcel_Shared_Date::ExcelToPHP($DOB1));
										}
										
										
										
										
										
										
										
										
										$DOM="";										
                                        $DOM1 = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getValue();
										
										if($DOM1=="")
										{
											$DOM="";
										}
										else
										{
										
										$DOM = date('d-M-y', PHPExcel_Shared_Date::ExcelToPHP($DOM1));
										}
										
                                        $CNO = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getValue();
                                        ?>
                                    <tr class="gradeX">
                                        <td><?php echo $FNO;?></td>
                                        <td><?php echo $NAME;?></td>
                                        <td><?php echo $ADDR;?></td>
                                        <td><?php echo $DOB;?></td>
                                        <td><?php echo $DOM;?></td>
                                        <td><?php echo $CNO;?></td>
                                        </tr>
                                    <?php

                                    }
                                  ?>

                                    </tbody>

                                </table>
                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
</section>
<?php
include "footer.php";
?>
<script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script src="js/dynamic_table_init.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#dynamic-table1').DataTable( {
            "order": [[ 0, "asc" ]]
        } );
    } );
</script>