<html>
    <?php
    echo $header;
    ?>
    <body class="error-body no-top lazy"  style="display: block;"> 
        <?php
        echo $nav;
        ?>
        <div class="container" style="top : 9%;position: relative">

            <div class="canvas padding-20">
                <h2 class="normal headers">Register As UTME Applicant - Step 1</h2>
                <div class="grid simple transparent">
                    <div class="grid-body ">
                        <div class="row">
                            <div id="rootwizard" class="col-md-12">
                                <div class="form-wizard-steps">
                                    <ul class="wizard-steps">
                                        <li class="active" data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Payment</span> </a> </li>
                                        <li data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Profile</span> </a> </li>
                                        <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Exam.</span> </a> </li>
                                        <li data-target="#step4" class=""> <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Print<br></span> </a> </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>

                                <div class="tab-content transparent"> 
                                    <div class="tab-pane active" id="tab1">
                                        <br /><br />
                                        <form>
                                            <table style="margin: 0 auto;width: 60%;" cellpadding="5">
                                                <tr>
                                                    <td>
                                                        <label class="bolds">Select Payment Method</label>
                                                    </td>
                                                    <td>
                                                        <select style="width: 350px;" id="selectpay">
                                                            <option>select payment option</option>
                                                            <option value="1">Online Payment with Interswitch & ETranzact</option>
                                                            <option value="2">Bank Payment</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div id="payview"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <input type="button" value="Pay" class="btn btn-default padding-10"/>
                                                    </td>
                                                </tr>
                                            </table>                                            
                                        </form>
                                    </div>

                                    <div class="tab-pane" id="tab2">
                                        <br /><br />
                                        <div class="grid simple">
                                            <div class="grid-title no-border">
                                                <h4>Personal <span class="semi-bold">Information</span></h4>
                                            </div>
                                            <div class="grid-body no-border">
                                                <br />
                                                <form class="form-no-horizontal-spacing" id="form-condensed" novalidate="novalidate" action="<?php echo $base; ?>/index.php/admissions/profile" method="post">
                                                    <div class="row column-seperation">
                                                        <div class="col-md-6">
                                                            <h4 class="thirteens bolds">Basic Information</h4>
                                                            <div class="row form-row">
                                                                <div class="col-md-4">
                                                                    <input class="form-control" name="firstname" placeholder="First Name" required="true"/>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input class="form-control" name="middlename" placeholder="Middle Name" required="true"/>
                                                                </div>                                                                    
                                                                <div class="col-md-4">
                                                                    <input class="form-control" name="lastname" placeholder="Last Name" required="true"/>
                                                                </div>                                                                                                                                        
                                                            </div>
                                                            <div class="row form-row">
                                                                <div class="col-md-4">
                                                                    <input class="form-control" name="appnumber" placeholder="Date of Birth" type="date" required="true"/>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" required="true">
                                                                        <option>Gender</option>
                                                                        <option value="Male">Male</option>
                                                                        <option value="Female">Female</option>
                                                                    </select>
                                                                </div>                                                                    
                                                                <div class="col-md-4">
                                                                    <select class="form-control" required="true">
                                                                        <option>Marital Status</option>
                                                                        <option value="Single">Single</option>
                                                                        <option value="Married">Married</option>                                                                        
                                                                    </select>
                                                                </div>                                                                                                                                        
                                                            </div>
                                                            <h4 class="thirteens bolds">Contact Information</h4>
                                                            <div class="row form-row">
                                                                <textarea class="form-control padded" placeholder="Mailing Address" style="resize: none" required="true"></textarea>
                                                            </div>
                                                            <div class="row form-row">
                                                                <div class="col-md-5">
                                                                    <select class="form-control" required="true">
                                                                        <option value="">Nigeria</option>
                                                                    </select>                                                                        
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <select class="form-control" required="true" id="states">
                                                                        <option>State of Origin</option>
                                                                        <?php
                                                                        foreach ($states as $key => $values) {
                                                                            echo("<option value = '$key'>$values</option>");
                                                                        }
                                                                        ?>
                                                                    </select>                                                                                                                                                
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <select class="form-control" required="true" id="lgas">
                                                                        <option>Local Government Area</option>
                                                                    </select>                                                                                                                                                
                                                                </div>                                                                    
                                                            </div>                                                                                                                                
                                                            <div class="row form-row">

                                                            </div>                                                                
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4 class="thirteens bolds">Academic Information</h4>
                                                            <div class="row form-row">
                                                                <div class="col-md-4">
                                                                    <select class="form-control" required="true">
                                                                        <option value="">Choice of AAU</option>
                                                                        <option value="1">First Choice</option>
                                                                        <option value="2">Second Choice</option>
                                                                        <option value="3">First and Second Choice</option>
                                                                    </select>                                                                                                                                                                                                                        
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <select class="form-control" required="true">
                                                                        <option>Selected Program(First choice)</option>
                                                                        <?php
                                                                        foreach ($programs as $key => $values) {
                                                                            echo("<option value = '$key'>$values</option>");
                                                                        }
                                                                        ?>
                                                                    </select>                                                                                                                                                                                                                        
                                                                </div>                                                                    
                                                                <div class="col-md-4">
                                                                    <select class="form-control" required="true">
                                                                        <option>Selected Program(Second choice)</option>
                                                                        <?php
                                                                        foreach ($programs as $key => $values) {
                                                                            echo("<option value = '$key'>$values</option>");
                                                                        }
                                                                        ?>                                                                        
                                                                    </select>                                                                                                                                                                                                                        
                                                                </div>                                                                                                                                        
                                                            </div>
                                                            <div class="padded">
                                                                <div class="row form-row">
                                                                    <div class="col-md-12">
                                                                        <input type="checkbox"/>  DE Candidate (Select if you are direct entry candidate)
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        Upload your recent passport <input type="file" class="form-control" required="true"/>
                                                                    </div>                                                                        
                                                                </div>
                                                                <div class="row form-row">
                                                                    <div class="col-md-12">
                                                                        <input type="text" class="form-control" autocomplete="false" placeholder="Application Number"/>
                                                                    </div>
                                                                </div>
                                                                <div class="row form-row">
                                                                    <div class="col-md-12">
                                                                        <input type="submit" class="form-control btn btn-default" value="Save and Continue"/>
                                                                    </div>
                                                                </div>                                                                    
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
                </div>
            </div>

            <?php
            echo $bottom;
            ?>
        </div> 

        <!-- END CONTAINER -->
        <?php
        echo $js;
        ?>
        <script type="text/javascript">
            $(function() {
                $("#selectpay").bind("change", function() {
                    var payOption = $(this).val();
                    if (payOption == 1) {
                        window.open("https://webpay.interswitchng.com/webpay/purchase.aspx?CADPID=CADP628051&MERTID=Demo&TXNREF=114021390894928528&AMT=4500000&TRANTYPE=00&applet=false");
                    }
                    if (payOption == 2) {
                        $("#payview").load("http://localhost/akungba/admissions/bank.php");
                    }
                });
            });
        </script>
    </body>
</html>
