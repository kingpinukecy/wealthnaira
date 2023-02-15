<?php
    //include('includes/connection.php');
    $title="WealthNaira Affiliate Marketing";
?>
<?php include 'header.php'; ?>
<body>
    <div class="container index">
        <div id="content-1" <?php if(isset($_GET['reject'])){echo "style=display:none";}
        else{echo "style=display:block";}?>>
            <b class='num'><span id="num">1</span> OF 6</b>
            <!-- PROGRESS BAR -->
                <div class="progress">
                    <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" style="width:16%;" 
                    aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            <!-- TEXT1 AREA -->
                <div class="text1 text-center"><em>In a world where 98% of online income opportunities are scams <b>(this changes everything)
                </b></em></div>
            <!-- TEXT2 AREA -->
                <div class="text2 text-center">
                    Would you like to know how you can Use your smart phone to <u>make as much as N750k a month - <i>LEGALLY</i>?</u>
                </div>
                <div class="text3 text-center">CHOOSE YOUR ANSWER BELOW</div>
                <div class="flex-container">
                    <button type="button" class="btn btn-danger flex-item">No</button>
                    <button type="button" class="btn btn-primary flex-item1">Yes</button>
                </div>
                <p id="msg" style="display:none;" class='text-center'></p>
        </div>
        <div id="content-2" <?php if(isset($_GET['reject'])){echo "style=display:block";}?>>
        <div class="text1 text-center"><em>Unfortunately, you're not a good fit for this program.</em></div>
            <div class="text2 text-center">
                Below is a list of other legitimate money making programs you might be interested in.
            </div>

            <ul class="mt-5 ml-3">
                <ol> <span class="fa fa-angle-double-right"></span> <a href="#">Make $1k - $5k+ Monthly Selling Books On Amazon Even If You're Not A Writer!
                Using Your Mobile Phone Or Laptop</a></ol>
                <ol> <span class="fa fa-angle-double-right"></span> <a href="#">Discover How I Made Over $4,053 
                     And How You Can Duplicate My Unique Strategy To Make $100 to $500 Daily From CPA Marketing</a></ol>
                <ol> <span class="fa fa-angle-double-right"></span> <a href="#">No Capital Needed - Click Here to Learn How Everyday Nigerians 
                    Are Making Between $1000 – $5,000 Monthly From The Comfort Of Their Homes Doing Jobs For International Companies With Just Their Smartphones Or Laptops</a></ol>
                <ol> <span class="fa fa-angle-double-right"></span> <a href="#">The 'No Hassle' Naija To Canada Japa System - The EASIEST and MOST ACCESSIBLE Way To Relocate To Canada This Year!!</a></ol>
            </ul>
        </div>
    </div>
<?php include 'footer.php'; ?>  

