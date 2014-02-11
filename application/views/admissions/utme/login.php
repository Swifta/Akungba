<html>
    <?php
    echo $header;
    ?>
    <body class="error-body no-top lazy"  style="display: block;"> 
        <?php
        echo $nav;
        ?>
        <div class="container" style="top : 9%;position: relative">
            <div class="row login-container animated fadeInUp">  
                <div class="col-md-7 col-md-offset-2 tiles white no-padding">
                    <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 center-block">
                        <div class="center-text">
                            <img src="<?php echo $assets; ?>/img/logo.jpeg" style="width: 64px;height: 64px;"/>
                        </div>
                        <h2 class="normal center-text">Welcome to Adekunle Ajasin University, Akungba</h2>
                    </div>
                    <div class="tiles grey p-t-10 p-b-20 text-black">
                        <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
                            <div class="col-md-6">
                                <div class="b-r p-r-10">
                                    <h4 class="normal padded">New Applicant</h4>
                                    <form id="frm_login" class="animated fadeIn" method="post" action="<?php echo $base; ?>/index.php?ref=admissions&mm=utme">
                                        <input type="text" class="padded form-control" size="30" placeholder="Email Address" required="true" name="emailaddress"/>
                                        <input type="text" class="padded form-control" size="30" placeholder="Jamb Registration Number" required="true" name="jambno"/>  
                                        <input type="text" class="padded form-control" size="30" placeholder="Mobile Number" required="true" name="mobile"/>
                                        <input type="submit" value="Send Application" class="thirteens padded btn btn-default"/>                                            
                                    </form>
                                    <?php
                                    if (isset($messages) && strlen($messages) > 0) {
                                        echo "<div class = 'errors'>$messages</div>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-l-10">
                                    <h4 class="normal padded">Existing Applicant</h4>
                                    <form id="frm_login" class="animated fadeIn">
                                        <input type="text" class="padded form-control" size="30" placeholder="Jamb Registration Number"/>
                                        <input type="password" class="padded form-control" size="30" placeholder="Password"/>
                                        <input type="submit" value="Log in" class="thirteens padded btn btn-default"/>                                            
                                    </form>
                                    <a href="#" class="padded">Forgot Password ?</a>
                                </div>                                    
                            </div>                                
                        </div>
                        <div class="infos center-text elevens">
                            <b>Information!</b> Please note that you can only login after you have used you eTranzact details to make payment on this portal. If you haven't used your payment details to pay yet please click here. Please if you have any issues with using this portal, please send your confirmation number, receipt number and your complaints in an email to helpme@aaua.edu.ng
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
    </body>
</html>
