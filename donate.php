<?php
    include 'functions.php';
    printHeaderAndMakeTabActive('donate')
?>
<div class="donate-body">
    <form method="POST" id="donate-form">
        <b><h2 class="top-text heavy-text">Donate</h2></b><br/>
        <h4>Your contribution will be used to fund important humanitarian projects. Thank you</h4>
        <section class="donate-form-body">
            <span>&#8358;</span>
            <input type="number" id="amount" name="amount" value="5000"/><br><br>
            <div id="cash-select">
                <button class="cash-btn" value="1000" data-quantity="1000"><span>&#8358;</span>1,000</button>
                <button class="cash-btn" value="5000" data-quantity="5000"><span>&#8358;</span>5,000</button>
                <button class="cash-btn" value="10000" data-quantity="10000"><span>&#8358;</span>10,000</button>
                <button class="cash-btn" value="50000" data-quantity="50000"><span>&#8358;</span>50,000</button>
            </div>
            <hr class="colored-hr">
            <div id="user-details">
                <h4><b>Personal Details</b></h4><hr>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="fname">First name <sup>*</sup>&nbsp;&nbsp;</label>
                        <a href="#" class="donate-tooltip" data-toggle="tooltip" title="First name is used to personalise your donation record">
                            <i class="fa fa-question-circle"></i>
                        </a><br>
                        &nbsp;<input type="text" id="fname" name="fname">
                        <br><br>
                    </div>
                    <div class="col-sm-6">
                        <label for="lname">Last name&nbsp;&nbsp;</label>
                        <a href="#" class="donate-tooltip" data-toggle="tooltip" title="Last name is used to personalise your donation record">
                            <i class="fa fa-question-circle"></i>
                        </a><br>
                        &nbsp;<input type="text" id="lname" name="lname"><br><br>
                    </div>
                </div>

                <label for="email">Email Address&nbsp;&nbsp;</label>
                <a href="#" class="donate-tooltip" data-toggle="tooltip" title="We will send the donation receipt to this email address">
                    <i class="fa fa-question-circle"></i>
                </a><br>
                &nbsp;<input type="email" id="email" name="email"><br><br>
            </div>
            <hr class="colored-hr">
            <div id="user-details">
                <h4><b>Card Info</b></h4><hr>
                <div>
                    <img src="imgs/mastercard.png"/>
                    <img src="imgs/visa.png"/>
                    <img src="imgs/verve.png"/>
                </div>
                <h5><i class="fas fa-lock"></i>&nbsp;This is a secure SSL encrypted payment</h5><br>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="cnumber">Card Number <sup>*</sup>&nbsp;&nbsp;</label>
                        <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The (typically) 16 digits on the front of your card.">
                            <i class="fa fa-question-circle"></i>
                        </a><br>
                        &nbsp;<input type="number" id="cnumber" name="cnumber" placeholder="Card Number">
                    </div>
                    <div class="col-sm-6">
                        <label for="cvc">CVC <sup>*</sup>&nbsp;&nbsp;</label>
                        <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The 3 digit(back) or 4 digit(front) value on your card.">
                            <i class="fa fa-question-circle"></i>
                        </a><br>
                        &nbsp;<input type="number" id="cvc" name="cvc" placeholder="CVC">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-sm-6">
                        <label for="holdername">Cardholder Name <sup>*</sup>&nbsp;&nbsp;</label>
                        <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The name of the credit card account holder.">
                            <i class="fa fa-question-circle"></i>
                        </a><br>
                        &nbsp;<input type="text" id="cnumber" name="holdername" placeholder="Cardholder name">
                    </div>
                    <div class="col-sm-6">
                        <label for="exp">Expiration <sup>*</sup>&nbsp;&nbsp;</label>
                        <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The date your credit card expires, typically on the front of the card.">
                            <i class="fa fa-question-circle"></i>
                        </a><br>
                        &nbsp;<input type="number" id="expm" name="expm" placeholder="MM">
                        &nbsp;<b style="font-size : 20px !important;">/</b>
                        &nbsp;<input type="number" id="expy" name="expy" placeholder="YY">
                    </div>
                </div>
            </div>

            <hr class="colored-hr">
            <div id="billing-details">
                <h4><b>Billing Details</b></h4><hr>
                <div>
                    <label for="country">Country <sup>*</sup>&nbsp;&nbsp;</label>
                    <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The country for your billing address">
                        <i class="fa fa-question-circle"></i>
                    </a><br>
                    &nbsp;<input type="text" id="country" name="country"><br><br>

                    <label for="address1">Address 1 <sup>*</sup>&nbsp;&nbsp;</label>
                    <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The primary billing address for your card">
                        <i class="fa fa-question-circle"></i>
                    </a><br>
                    &nbsp;<input type="text" id="address1" name="address1"><br><br>

                    <label for="address2">Address 2&nbsp;&nbsp;</label>
                    <a href="#" class="donate-tooltip" data-toggle="tooltip" title="(optional) The suite, apartment number, post office box (etc) associated with your billing address">
                        <i class="fa fa-question-circle"></i>
                    </a><br>
                    &nbsp;<input type="text" id="address2" name="address2"><br><br>

                    <label for="state">State <sup>*</sup>&nbsp;&nbsp;</label>
                    <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The state for your billing address">
                        <i class="fa fa-question-circle"></i>
                    </a><br>
                    &nbsp;<input type="text" id="state" name="state"><br><br>

                    <label for="postcode">Zip/Postal Code <sup>*</sup>&nbsp;&nbsp;</label>
                    <a href="#" class="donate-tooltip" data-toggle="tooltip" title="The postal code or zip for your billing address">
                        <i class="fa fa-question-circle"></i>
                    </a><br>
                    &nbsp;<input type="text" id="postcode" name="postcode"><br><br>
                </div>
            </div>
            <input type="checkbox" id="agree" name="agree"/>&nbsp;
            <element>I have read and accept your <a id="tandcs" href="">terms and conditions.</a></element>
            <br><br>
            <div>
                <label for="postcode">Donation total: &nbsp;&nbsp;</label>
                &#8358;<input disabled="disabled" type="text" id="total" name="total" value="5000"/>
            </div>
        </section>
        <input type="submit" id="submitdonation" name="submitdonation" value="Donate Now"/>
    </form>
</div>
<?php
    print_footer();
?>