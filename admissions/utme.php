<html>
    <?php
    include '../assets/header/head.php';
    ?>    
    <body class="error-body no-top lazy"  style="display: block;"> 
        <?php
        include '../assets/templates/nav.php';
        ?>        
        <div class="page-container row">
            <?php
            include '../assets/templates/utme-sidebar.php';
            ?>
            <div class="page-content" style="top : 9%;position: relative">
                <div class="container">
                    <div class="canvas padding-20">
                        <h2 class="normal headers">UTME Admission</h2>
                        <div class="grid simple transparent">
                            <div class="grid-body ">
                                <div class="row">
                                    <form id="commentForm">
                                        <div id="rootwizard" class="col-md-12">
                                            <div class="form-wizard-steps">
                                                <ul class="wizard-steps">
                                                    <li class="active" data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Payment</span> </a> </li>
                                                    <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Profile</span> </a> </li>
                                                    <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Exam.</span> </a> </li>
                                                    <li data-target="#step4" class=""> <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Print<br>
                                                            </span> </a> </li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="tab-content transparent">
                                                
                                                <div class="tab-pane active" id="tab1">
                                                    <br />
                                                    <div class="infos">
                                                        <span class="semi-bold elevens"><i class="icon-custom-alert"></i>&nbsp;&nbsp;Post-UTME Information</span>
                                                        <span class="normal elevens">Only pre-approved candidates are allowed to register for this POST-UTME screening form</span>
                                                    </div>
                                                    <div class="infos">
                                                        <span class="semi-bold elevens"><i class="icon-custom-alert"></i>&nbsp;&nbsp;Information</span>
                                                        <span class="normal elevens">Please note that the section is ONLY for making payments with the eTranzact details that you have purchased from the bank. 
                                                            If you have used the PIN previously on this section, please click here to go to the admission page.</span>
                                                    </div>                   
                                                    <br />
                                                    <div class="row form-row">
                                                        <b class="padded">
                                                            Select Payment Options
                                                        </b>
                                                        <br />                                                     
                                                        <div class="col-md-5">
                                                            <input type="radio" name="payment"/>      eTranzact PIN Payments
                                                            <img src="../assets/img/etz.jpg" style="width: 200px;height: 50px;"/>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="radio" name="payment"/>      Interswitch Payment
                                                            <img src="../assets/img/isw.gif" style="width: 200px;height: 50px;margin-top: -15px;"/>                                                            
                                                        </div>                                                        
                                                    </div>
                                                    <br />
                                                    <div class="row form-row padded">
                                                        <div class="col-md-5">
                                                            <input class="form-control" placeholder="Jamb Registration Number" required="true" />
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input class="form-control" placeholder="Receipt Number" required="true"/>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input class="form-control" placeholder="Confirmation Number" required="true"/>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <input type="button" class="btn btn-default" value="Next" id="btnNext"/>
                                                        </div>
                                                        <input type="hidden" value="4500000" id="amount"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="tab-pane" id="tab2">
                                                    <br />
                                                    
                                                    
                                                    
                                                </div>
                                                
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>                
                        </div>
                    </div>
                </div>                
            </div>
        </div>
        <?php
        include '../assets/templates/bottom.php';
        ?>
        <?php
        include '../assets/templates/js.php';
        ?>            
        <script src="assets/plugins/boostrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function(){
                $("#btnNext").bind("click",function(){
                    var amount = $("#amount").val();
                    window.open("https://webpay.interswitchng.com/webpay/purchase.aspx?CADPID=CADP628051&MERTID=Demo&TXNREF=114021390894928528&AMT="+amount+"&TRANTYPE=00&applet=false");
                });
            });
        </script>
    </body>
</html>
