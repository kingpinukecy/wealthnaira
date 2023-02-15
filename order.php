<?php
    //include('includes/connection.php');
  $title="Order Cart - WealthNaira Platform";
?>
<?php include 'header.php'; ?>
<body>
<div class="container">
    <div class="flex-container order">
        <img src="images/wealth logo.png" width="110px" height="90px" class="mb-5 flex-item">
        <p>​<b><i>NEED HELP?</i></b> Email: help@wealthnaire.com</p>
    </div>
    <h4 class="h4-order">HOW TO ORDER</h4>
    <div class="row mt-5">
        <div class="col-md-6 mb-5">
            <h4><b>ORDER SUMMARY</b></h4>
            <div class="box-order">
                <p>You are Buying: 72IG WhatsApp Income Blueprint + Implementation Program B</p>
                <hr>
                <p>This is a 2 in 1 training program on how to make money by selling digital affiliate products.</p>
                <span class="fa fa-download"> </span> Digital Product<br>
                <div class="col-md-6 item">Price:</div><div class="col-md-6 item1">₦65,000.00</div>
            </div>
            <p>Immediate access to this product is available once payment is confirmed.</p>
        </div>
        <div class="col-md-6">
            <h3><b>1. Enter Your Details (Correctly):</b></h3>
            <div class="form-row col-md-12 payForm mb-3">
                <div class="col-md-12">
                    <input type="text" class="form-control" id="fname" placeholder="First name">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="lname" placeholder="Last name">
                </div>
                <div class="col-md-12">
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                    <input type="text" class="form-control" id="phone" placeholder="phone">
                </div>
            </div>
            <h3><b>2. Choose Payment Method:</b></h3>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1">PAYSTACK (Naira)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">PAYSTACK (US Dollars)</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                <label class="form-check-label" for="inlineRadio3">FLUTTERWAVE (Naira)</label>
            </div>
            <img src="images/payment-logo.PNG" width="60%" height="70px" class="mt-4 order-img">
            <button type="submit" id="btn-pay" name="btn-pay" class="btn btn-danger mt-3">CHECKOUT</button>
        </div>
    </div>
</div> 

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.min.js"></script>
<?php include 'includes/custom.php';?>
</body>
</html>