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
                                            <br /><br /><br /><br />
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
        <script type="text/javascript">
            $(function(){
                $("#selectpay").bind("change",function(){
                    var payOption = $(this).val();
                    if(payOption == 1){
                        window.open("https://webpay.interswitchng.com/webpay/purchase.aspx?CADPID=CADP628051&MERTID=Demo&TXNREF=114021390894928528&AMT=4500000&TRANTYPE=00&applet=false");
                    }
                    if(payOption == 2){
                        $("#payview").load("http://localhost/akungba/admissions/bank.php");
                    }
                });
            });
        </script>
    </body>
</html>
