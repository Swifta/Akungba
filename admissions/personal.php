<html>
    <?php
    include '../assets/header/head.php';
    ?>
    <body class="error-body no-top lazy"  style="display: block;"> 
        <?php
        include '../assets/templates/nav.php';
        ?>
        <div class="container" style="top : 9%;position: relative">

            <div class="canvas padding-20">
                <h2 class="normal headers">Register As UTME Applicant - Step 2</h2>
                <div class="grid simple transparent">
                    <div class="grid-body ">
                        <div class="row">
                            <form id="commentForm">
                                <div id="rootwizard" class="col-md-12">
                                    <div class="form-wizard-steps">
                                        <ul class="wizard-steps">
                                            <li data-target="#step1"> <a href="#tab1" data-toggle="tab"> <span class="step">1</span> <span class="title">Payment</span> </a> </li>
                                            <li class="active" data-target="#step2" class=""> <a href="#tab2" data-toggle="tab"> <span class="step">2</span> <span class="title">Profile</span> </a> </li>
                                            <li data-target="#step3" class=""> <a href="#tab3" data-toggle="tab"> <span class="step">3</span> <span class="title">Exam.</span> </a> </li>
                                            <li data-target="#step4" class=""> <a href="#tab4" data-toggle="tab"> <span class="step">4</span> <span class="title">Print<br>
                                                    </span> </a> </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="tab-content transparent"> 
                                        <div id="tab2">
                                            <br /><br /><br /><br />
                                            <div class="grid simple">
                                                <div class="grid-title no-border">
                                                    <h4>Personal <span class="semi-bold">Information</span></h4>
                                                </div>
                                                <div class="grid-body no-border">
                                                    <form class="form-no-horizontal-spacing" id="form-condensed" novalidate="novalidate">
                                                        <div class="row column-seperation">
                                                            <div class="col-md-6">
                                                                <h4 class="thirteens bolds">Basic Information</h4>
                                                                <div class="row form-row">
                                                                    <div class="col-md-4">
                                                                        <input class="form-control" name="firstname" placeholder="First Name"/>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <input class="form-control" name="middlename" placeholder="Middle Name"/>
                                                                    </div>                                                                    
                                                                    <div class="col-md-4">
                                                                        <input class="form-control" name="lastname" placeholder="Last Name"/>
                                                                    </div>                                                                                                                                        
                                                                </div>
                                                                <div class="row form-row">
                                                                    <div class="col-md-4">
                                                                        <input class="form-control" name="appnumber" placeholder="Date of Birth" type="date"/>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control">
                                                                            <option>Gender</option>
                                                                        </select>
                                                                    </div>                                                                    
                                                                    <div class="col-md-4">
                                                                        <select class="form-control">
                                                                            <option>Marital Status</option>
                                                                        </select>
                                                                    </div>                                                                                                                                        
                                                                </div>
                                                                <h4 class="thirteens bolds">Contact Information</h4>
                                                                <div class="row form-row">
                                                                    <textarea class="form-control padded" placeholder="Mailing Address" style="resize: none"></textarea>
                                                                </div>
                                                                <div class="row form-row">
                                                                    <div class="col-md-5">
                                                                        <select class="form-control">
                                                                            <option>Country</option>
                                                                        </select>                                                                        
                                                                    </div>
                                                                    <div class="col-md-5"></div>
                                                                </div>                                                                                                                                
                                                                <div class="row form-row">
                                                                    
                                                                </div>                                                                
                                                            </div>
                                                            <div class="col-md-6"></div>
                                                        </div>
                                                    </form>
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

            <?php
            include '../assets/templates/bottom.php';
            ?>
        </div> 
        <!-- END CONTAINER -->
        <?php
        include '../assets/templates/js.php';
        ?>
    </body>
</html>
