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
                                                    <br />
                                                    <form class="form-no-horizontal-spacing" id="form-condensed" novalidate="novalidate">
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
                                                                        </select>
                                                                    </div>                                                                    
                                                                    <div class="col-md-4">
                                                                        <select class="form-control" required="true">
                                                                            <option>Marital Status</option>
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
                                                                            <option>Country</option>
                                                                        </select>                                                                        
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" required="true">
                                                                            <option>State of Origin</option>
                                                                        </select>                                                                                                                                                
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <select class="form-control" required="true">
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
                                                                            <option>Choice of AAU</option>
                                                                        </select>                                                                                                                                                                                                                        
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <select class="form-control" required="true">
                                                                            <option>Selected Program(First choice)</option>
                                                                        </select>                                                                                                                                                                                                                        
                                                                    </div>                                                                    
                                                                    <div class="col-md-4">
                                                                        <select class="form-control" required="true">
                                                                            <option>Selected Program(Second choice)</option>
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
