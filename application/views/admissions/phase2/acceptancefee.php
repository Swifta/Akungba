<div class="tab-pane active" id="tab1">
    <br />
    <div class="infos">
        <span class="semi-bold elevens"><i class="icon-custom-alert"></i>&nbsp;&nbsp;Post-UTME Information</span>
        <span class="normal elevens">Only admitted candidates are allowed to pay acceptance fee to secure their admission</span>
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
            <img src="../assets/img/isw.gif" style="width: 200px;height: 50px;"/>                                                            
        </div>                                                        
    </div>
    <br />
    <div class="row form-row padded">
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