<html>
    <?php
    echo $header;
    ?>    
    <body class="error-body no-top lazy"  style="display: block;"> 
        <?php
        echo $nav;
        ?>        
        <div class="page-container row">
            <div class="page-content" style="top : 9%;position: relative">
               
                    <div style="padding: 0% 1% 0% 1%;">
                        <h2 class="normal headers">UTME Admission</h2>
                        <div class="row">
                            <div id="rootwizard" class="col-md-12">
                                <div class="form-wizard-steps">
                                    <ul class="wizard-steps">
                                        <li class="active" data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Check Results</span> </a> </li>
                                        <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Upload Supporting Documents</span> </a> </li>
                                        <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Admission Status.</span> </a> </li>
                                        <li data-target="#step4" class=""> <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Acceptance Fee.</span> </a> </li>

                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="tab-content transparent">

                                    <div class="tab-pane active" id="tab1">
                                        <br />
                                        <?php include 'checkresults.php' ?>
                                    </div>

                                    <div class="tab-pane" id="tab2">
                                        <?php include 'finaladmission.php' ?>
                                    </div>
                                    <div class="tab-pane" id="tab3">
                                        <?php include 'admissionstatus.php' ?>
                                    </div>
                                    <div class="tab-pane" id="tab4">
                                        <?php include 'acceptancefee.php' ?>
                                    </div>


                                </div>
                            </div>
                            <div>
                               <?php echo $result; ?>
                            </div>

                        </div>
                    </div>                
                

            </div>
            <?php
            echo $bottom;
            ?>
            <?php
            echo $js;
            ?>            
            <script src="../assets2/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>

    </body>
</html>


