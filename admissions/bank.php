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
                <h2 class="normal headers">Register As UTME Applicant - Step 1</h2>
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
                                        <div id="tab1">
                                            <br /><br />
                                            <div class="infos padding-10 m-t-40">
                                                Payment in the bank will require you to go to any of the following branches.
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
